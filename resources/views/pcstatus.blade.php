@extends('layouts.main')

@section('title', 'Status PC AJK')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/pcshow.css')}} ">
@endsection

@section('content')
{!! Form::model($pc) !!}
  <div class="col-xs-5">
      <div class="form-group">
      {!! Form::label('title', 'Status PC AJK', ['class' => 'control-label']) !!}
        <div class="plane">
          <ol class="cabin fuselage">
            <li class="row row--1">
              <ol class="seats" type="A">
                <li class="seat">
                  {!! Form::hidden('pc1',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc1',0,  $pc[1]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc1', '1', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc2',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc2',0,  $pc[2]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc2', '2', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc3',1, ['class' => 'form-control'])!!}
                  {!! Form::checkbox('pc3',0,  $pc[3]->status, ['class' => 'form-control']) !!}
                  {!! Form::label('pc3', '3', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc4',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc4',0,  $pc[4]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc4', '4', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc16',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc16',0,  $pc[16]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc16', '16', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc17',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc17',0,  $pc[17]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc17', '17', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc18',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc18',0,  $pc[18]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc18', '18', ['class' => 'control-label']) !!}

                </li>
              </ol>
            </li>
            <li class="row row--2">
              <ol class="seats" type="A">
                <li class="seat">
                  {!! Form::hidden('pc5',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc5',0,  $pc[5]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc5', '5', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc6',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc6',0,  $pc[6]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc6', '6', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc7',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc7',0,  $pc[7]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc7', '7', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc8',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc8',0,  $pc[8]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc8', '8', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc19',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc19',0,  $pc[19]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc19', '19', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc20',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc20',0,  $pc[20]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc20', '20', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc21',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc21',0,  $pc[21]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc21', '21', ['class' => 'control-label']) !!}
                </li>
              </ol>
            </li>
            <li class="row row--3">
              <ol class="seats" type="A">
                <li class="seat">
                  {!! Form::hidden('pc9',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc9',0,  $pc[9]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc9', '9', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc10',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc10',0,  $pc[10]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc10', '10', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc11',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc11',0,  $pc[11]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc11', '11', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc12',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc12',0,  $pc[12]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc12', '12', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc22',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc22',0,  $pc[22]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc22', '22', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc23',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc23',0,  $pc[23]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc23', '23', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc24',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc24',0,  $pc[24]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc24', '24', ['class' => 'control-label']) !!}
                </li>
              </ol>
            </li>
            <li class="row row--4">
              <ol class="seats" type="A">
                <li class="seat">
                </li>
                <li class="seat">
                  {!! Form::hidden('pc13',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc13',0,  $pc[13]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc13', '13', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc14',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc14',0,  $pc[14]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc14', '14', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc15',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc15',0,  $pc[15]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc15', '15', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc25',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc25',0,  $pc[25]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc25', '25', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc26',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc26',0,  $pc[26]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc26', '26', ['class' => 'control-label']) !!}
                </li>
                <li class="seat">
                  {!! Form::hidden('pc27',1, ['class' => 'form-control']) !!}
                  {!! Form::checkbox('pc27',0,  $pc[27]->status , ['class' => 'form-control']) !!}
                  {!! Form::label('pc27', '27', ['class' => 'control-label']) !!}
                </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>
  </div>   
{!! Form::close() !!} 
@endsection