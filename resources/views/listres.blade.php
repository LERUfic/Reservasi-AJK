@extends('layouts.main')

@section('title', 'Admin Reservasi')

@section('navbar')
	@include('layouts.navbar')
@endsection
@section('content')
	<div class="col-xs-7">
			<div id="calendar"></div>
		</div>
@endsection

@section('frontcss')
	<link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}" />	
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::asset('css/fullcalendar.min.css')}}">
	<link media = 'print' rel="stylesheet" href="{{ URL::asset('css/fullcalendar.print.min.css') }}"/>
@endsection

@section('frontjs')
	<script src="{{URL::asset('js/jquery2.min.js')}}"></script>
@endsection
	
@section('js')
	<script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('js/moment2.min.js')}}"></script>
	<script src="{{URL::asset('js/fullcalendar.min.js')}}"></script>
	

	<script type="text/javascript">
        var BASEURL = "{{ url('/') }}";
        $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: BASEURL + '/jadwal'
        });
        
    });

	</script>
@endsection