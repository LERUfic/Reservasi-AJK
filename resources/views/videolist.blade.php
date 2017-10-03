@extends('layouts.main')

@section('title', 'Admin Reservasi')

@section('navbar')
	@include('layouts.navbar')
@endsection
@section('content')
	<table id="reservation" class="display" cellspacing="0" width="100%">
		<thead>
		<tr>
			<th>No</th>
			<th>Link</th>
			<th>Judul</th>
			<th>Durasi</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th>No</th>
			<th>Link</th>
			<th>Judul</th>
			<th>Durasi</th>
			<th>Aksi</th>
		</tr>
		</tfoot>
		<tbody>
		@foreach ($reservations as $res)
			<tr>
				<th>{{ $res->num }}</th>
				<th>{{ $res->link }}</th>
				<th>{{ $res->judul }}</th>
				<th>{{ $res->durasi }}</th>
				<th>
					<form action="/videolist/edit" method="post" accept-charset="utf-8">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $res->id }}" name="idvideo">
						<button type="submit" class="btn btn-warning">Edit</button>
					</form>
					<form action="/videolist/delete" method="post" accept-charset="utf-8">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $res->id }}" name="idvideo">
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</th>

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