@extends('layouts.main')

@section('title', 'Admin Reservasi')

@section('navbar')
	@include('layouts.navbar')
@endsection
@section('content')
	<table id="reservation" class="display" cellspacing="0" width="100%">
		<thead>
		<tr>
			<th>Name</th>
			<th>NRP</th>
			<th>Mulai</th>
			<th>Selesai</th>
			<th>Barang</th>
			<th>Jumlah</th>
			<th>Status</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th>Name</th>
			<th>NRP</th>
			<th>Mulai</th>
			<th>Selesai</th>
			<th>Barang</th>
			<th>Jumlah</th>
			<th>Status</th>
		</tr>
		</tfoot>
		<tbody>
		@foreach ($reservations as $res)
			<tr>
				<th>{{ $res->user->name }}</th>
				<th>{{ $res->nrp }}</th>
				<th>{{ $res->start }}</th>
				<th>{{ $res->end }}</th>
				<th>{{ $res->barang }}</th>
				<th>{{ $res->jumlah }}</th>
				<th>{{ $res->status }}</th>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
@endsection

@section('js')
	<script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $('#reservation').DataTable();
        });
	</script>
@endsection