@extends('layouts.app')

@section('title', 'Appointment Register')

@section('css')
	<link href='{{ asset('plugins/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
	<style>
		#calendar {
		    max-width: 900px;
		    float: right;
		}

		#external-events {
			float: left;
			width: 150px;
			padding: 0 10px;
			border: 1px solid #ccc;
			background: #eee;
			text-align: left;
		}

		#external-events h4 {
			font-size: 16px;
			margin-top: 0;
			padding-top: 1em;
		}

		#external-events .fc-event {
			margin: 10px 0;
			cursor: pointer;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<h1>	
			Create Appointment for student: {{ $student->full_name }}
			<button id="save" class="btn btn-success" style="float: right;">Save Changes</button>
			@if (auth()->user()->role != 'admin')
				<a href="{{ route('university.studentList') }}" class="btn btn-primary" style="float: right;">Back</a>
			@else
				<a href="{{ route('university.students', $university->id) }}" class="btn btn-primary" style="float: right;">Back</a>
			@endif
		</h1>

		<div class="section">
			<div id="calendar"></div>
		</div>
		<div id='external-events'>
			<h4>Appointment Options</h4>

			<div id='external-events-list'>
				@for ($i = count(json_decode($studentEvent, true)); $i < 3; $i++)
					<div class='fc-event'>Option {{ $i+1 }} for {{ $student->first_name }}</div>
				@endfor
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src='{{ asset('plugins/fullcalendar/packages/core/main.js') }}'></script>
	<script src='{{ asset('plugins/fullcalendar/packages/interaction/main.js') }}'></script>
	<script src='{{ asset('plugins/fullcalendar/packages/daygrid/main.js') }}'></script>
	<script src='{{ asset('plugins/fullcalendar/packages/timegrid/main.js') }}'></script>
	<script src='{{ asset('plugins/fullcalendar/packages/list/main.js') }}'></script>
	<script>
	 	document.addEventListener('DOMContentLoaded', function() {
	 		var Calendar = FullCalendar.Calendar;
	    	var Draggable = FullCalendarInteraction.Draggable;

	    	var calendarEl = document.getElementById('calendar');

	    	var containerEl = document.getElementById('external-events-list');
		    new Draggable(containerEl, {
		      	itemSelector: '.fc-event',
		      	eventData: function(eventEl) {
			        return {
			          	title: eventEl.innerText.trim()
			        }
		      	}
		    });

		    var calendar = new Calendar(calendarEl, {
				plugins: [ 
					@if(count(json_decode($studentEvent, true)) < 3) 'interaction', @endif 
					'dayGrid', 
					'timeGrid', 
					'list' 
				],
				defaultView: 'timeGridWeek',
				minTime: '08:00:00',
				maxTime: '20:00:00',
				defaultDate: "{{ now()->format('Y-m-d') }}",
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				header: {
				  	left: 'prev,next today',
				  	center: 'title',
				  	right: 'dayGridMonth,timeGridWeek,timeGridDay'
				},
				events: {!! $studentEvent !!},
				weekends: false,
				droppable: true,
				allDaySlot: false,
				drop: function(arg) {
			        arg.draggedEl.parentNode.removeChild(arg.draggedEl);
			    },
		    });

	    	calendar.render();

	    	$('#save').on('click', function (ev) {
	    		ev.preventDefault();

	    		var events = calendar.getEvents();
	    		var dataEv = [];

	    		if(events.length < 3) {
	    			alert("You must assign the 3 options");
	    			return '';
	    		}

	    		dataEv = events.map(function (v, k) {
	    			return {
	    				date: v.start.getFullYear()+"-"+(v.start.getMonth()+1)+"-"+v.start.getDate()+' '+v.start.getHours()+':00:00',
	    				user_id: "{{ $student->id }}",
	    				@if (auth()->user()->role == 'admin') university_id: "{{ $university->id }}" @endif
	    			};
	    		});

	    		$.ajax({
	    			url: "{{ route('appointments.store') }}",
	    			type: 'POST',
	    			data: JSON.stringify(dataEv),
	    			headers: {
	    			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	    			  'X-Requested-With': 'XMLHttpRequest',
	    			  'Content-Type': 'application/json'
	    			}
	    		}).done(function(resp) {
	    			if (resp.success) {
	    				alert(resp.message);
	    				location.reload();
	    			}
	    		}).fail(function(resp) {
	    			console.log(resp);
	    			alert('There was an error while creating appointments.');
	    		});
	    	});
	  	});
	</script>
@endsection