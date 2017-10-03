@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
	<div class="col-xs-5">
		<form method="POST" action="/addvideo">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="keperluan">Add Video</label>
				<input type="text" class="form-control" name="judulvideo" placeholder="masukan judul video" required>
				<input type="text" class="form-control" name="linkvideo" placeholder="masukan link video" required>
				<input type="text" class="form-control" name="durasivideo" placeholder="masukan durasi video (detik)" required>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
@endsection

@section('js')
	<script src="{{URL::asset('js/moment.min.js')}}"></script>
@endsection

