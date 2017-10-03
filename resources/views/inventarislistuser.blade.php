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
            <th>Nama Barang</th>
            <th>Total</th>
            <th>Ada</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Total</th>
            <th>Ada</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach ($reservations as $res)
            <tr>
                <th>{{ $res->num }}</th>
                <th>{{ $res->barang }}</th>
                <th>{{ $res->jumlah_total }}</th>
                <th>{{ $res->jumlah_sisa }}</th>
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