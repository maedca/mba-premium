@extends('layouts.app')

@section('title', 'Appoiment Select')

@section('content')
	<div class="container">
		<h1 class="text-center">Select an option for:</h1>
		<h2 class="text-center">{{ $studentEvent->first()->university->full_name }}</h2>


		<ol>
			@foreach ($studentEvent as $event)
				<li style="padding: 10px;">
					{{ $event->date->format('g:i a j \of F \of Y') }} 
					<a href="{{ route('appointments.accepted', $event->id) }}" class="btn btn-sm btn-success">Accept</a>
				</li>
			@endforeach
		</ol>
	</div>
@endsection