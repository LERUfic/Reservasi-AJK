@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
@include('layouts.navbar')
@endsection


@section('content')

	{!! Form::model( $task, ['method' => 'POST','route' => ['update.inven', $task->id]]) !!}
	<div class="col-xs-5">
		<div class="form-group">
		    {!! Form::label('title', 'Inventaris', ['class' => 'control-label']) !!}
		   	{!! Form::text('barang', $task->barang, ['class' => 'form-control']) !!}
		    {!! Form::text('jumlah_total', $task->jumlah_total, ['class' => 'form-control']) !!}
   		    {!! Form::text('jumlah_dipinjam', $task->jumlah_dipinjam, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
	</div>
	 
	{!! Form::close() !!}	

@stop