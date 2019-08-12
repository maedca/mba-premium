@extends('layouts.app')

@section('title', 'Appointment List')

@section('css')
	<link href='{{ asset('plugins/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
	<link href='{{ asset('plugins/fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
	<style>
		#calendar {
		    max-width: 900px;
		    margin: auto;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<div class="section">
			<div id="calendar"></div>
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

	    	var calendarEl = document.getElementById('calendar');

		    var calendar = new Calendar(calendarEl, {
				plugins: [ 
					'dayGrid', 
					'timeGrid', 
					'list' 
				],
				defaultView: 'listWeek',
				minTime: '08:00:00',
				maxTime: '20:00:00',
				defaultDate: "{{ now()->format('Y-m-d') }}",
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				header: {
				  	left: 'prev,next today',
				  	center: 'title',
				  	right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek,listDay'
				},
				events: {!! $events !!},
				weekends: false,
				allDaySlot: false
		    });

	    	calendar.render();
	  	});
	</script>
@endsection