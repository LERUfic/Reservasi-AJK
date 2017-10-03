@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
	<div class="col-xs-5">
		<form method="POST" action="/inventaris/add">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="keperluan">Tambah Inventaris</label>
				<input type="text" class="form-control" name="barang" placeholder="masukan nama barang" required>
				<input type="text" class="form-control" name="jumlah_total" placeholder="masukan jumlah total barang" required>
				<input type="text" class="form-control" name="jumlah_dipinjam" placeholder="masukan jumlah yang sedang dipinjam" required>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
@endsection

@section('js')
	<script src="{{URL::asset('js/moment.min.js')}}"></script>
@endsection

