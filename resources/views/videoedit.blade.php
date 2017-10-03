@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
@include('layouts.navbar')
@endsection


@section('content')

	{!! Form::model( $task, ['method' => 'POST','route' => ['video.update', $task->id]]) !!}
	<div class="col-xs-5">
		<div class="form-group">
		    {!! Form::label('title', 'Link', ['class' => 'control-label']) !!}
		   	{!! Form::text('judul', $task->judul, ['class' => 'form-control']) !!}
		    {!! Form::text('link', $task->link, ['class' => 'form-control']) !!}
   		    {!! Form::text('durasi', $task->durasi, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
	</div>
	 
	{!! Form::close() !!}	

@stop