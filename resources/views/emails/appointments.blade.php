@extends('emails.layout')

@section('content')
	<div style="width: 600px; margin: 0px auto; position: absolute;">
		<center>
			<h1>Aprobación de Cita</h1>
		</center>

		<p style="text-align: justify;">
			Ha sido invitado a una entrevista con {{ $appointments[0]->university->full_name }}, hemos apartado para usted
			los siguientes horarios.
		</p>
		
		<div style="position: relative;">
			<a href="{{ route('appointments.select', $appointments[0]->university->id) }}" class="btn btn-success" style="text-transform: uppercase; float: left; text-decoration: none; color: black;">Aprobado</a> 
			<a href="{{ route('appointments.cancel', $appointments[0]->university->id) }}" class="btn btn-danger" style="text-transform: uppercase; float: right; text-decoration: none; color: black;">No estoy disponible</a> 
		</div>
		
		<div style="position: relative;">
			<ol>
				@foreach ($appointments as $appointment)
					<li>{{ $appointment->date->format('g:i a j \d\e F \d\e Y') }}</li>
				@endforeach
			</ol>
		</div>
	</div>
@endsection