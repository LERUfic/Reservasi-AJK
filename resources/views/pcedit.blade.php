@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href=" {{URL::asset('css/pcstatus.css')}} ">
@endsection

@section('content')
<div class="col-xs-5">
    <form method="POST" action="/changestatus">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Ubah Status PC AJK</label>
        <div class="plane">
        <center><label>Papan Tulis</label><center>
          <ol class="cabin fuselage">
            <li class="row row--1">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="hidden" name="pc1" value="1">
                  <input type="checkbox" id="pc1" name="pc1" value="0" />
                  <label for="pc1">1</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc2" value="1">
                  <input type="checkbox" id="pc2" name="pc2" value="0" />
                  <label for="pc2">2</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc3" value="1">
                  <input type="checkbox" id="pc3" name="pc3" value ="0"/>
                  <label for="pc3">3</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc4" value="1">
                  <input type="checkbox" id="pc4" name="pc4" value ="0"/>
                  <label for="pc4">4</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc16" value="1">
                  <input type="checkbox" id="pc16" name="pc16" value ="0"/>
                  <label for="pc16">16</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc17" value="1">
                  <input type="checkbox" id="pc17" name="pc17" value ="0"/>
                  <label for="pc17">17</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc18" value="1">
                  <input type="checkbox" id="pc18" name="pc18" value ="0"/>
                  <label for="pc18">18</label>
                </li>
              </ol>
            </li>
            <li class="row row--2">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="hidden" name="pc5" value="1">
                  <input type="checkbox" id="pc5" name="pc5" value ="0"/>
                  <label for="pc5">5</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc6" value="1">
                  <input type="checkbox" id="pc6" name="pc6" value ="0"/>
                  <label for="pc6">6</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc7" value="1">
                  <input type="checkbox" id="pc7" name="pc7" value ="0"/>
                  <label for="pc7">7</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc8" value="1">
                  <input type="checkbox" id="pc8" name="pc8" value ="0"/>
                  <label for="pc8">8</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc19" value="1">
                  <input type="checkbox" id="pc19" name="pc19" value ="0"/>
                  <label for="pc19">19</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc20" value="1">
                  <input type="checkbox" id="pc20" name="pc20" value ="0"/>
                  <label for="pc20">20</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc21" value="1">
                  <input type="checkbox" id="pc21" name="pc21" value ="0"/>
                  <label for="pc21">21</label>
                </li>
              </ol>
            </li>
            <li class="row row--3">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="hidden" name="pc9" value="1">
                  <input type="checkbox" id="pc9" name="pc9" value ="0"/>
                  <label for="pc9">9</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc10" value="1">
                  <input type="checkbox" id="pc10" name="pc10" value ="0"/>
                  <label for="pc10">10</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc11" value="1">
                  <input type="checkbox" id="pc11" name="pc11" value ="0"/>
                  <label for="pc11">11</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc12" value="1">
                  <input type="checkbox" id="pc12" name="pc12" value ="0"/>
                  <label for="pc12">12</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc22" value="1">
                  <input type="checkbox" id="pc22" name="pc22" value ="0"/>
                  <label for="pc22">22</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc23" value="1">
                  <input type="checkbox" id="pc23" name="pc23" value ="0"/>
                  <label for="pc23">23</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc24" value="1">
                  <input type="checkbox" id="pc24" name="pc24" value ="0"/>
                  <label for="pc24">24</label>
                </li>
              </ol>
            </li>
            <li class="row row--4">
              <ol class="seats" type="A">
                <li class="seat">
                </li>
                <li class="seat">
                  <input type="hidden" name="pc13" value="1">
                  <input type="checkbox" id="pc13" name="pc13" value ="0"/>
                  <label for="pc13">13</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc14" value="1">
                  <input type="checkbox" id="pc14" name="pc14" value ="0"/>
                  <label for="pc14">14</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc15" value="1">
                  <input type="checkbox" id="pc15" name="pc15" value ="0"/>
                  <label for="pc15">15</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc25" value="1">
                  <input type="checkbox" id="pc25" name="pc25" value ="0"/>
                  <label for="pc25">25</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc26" value="1">
                  <input type="checkbox" id="pc26" name="pc26" value ="0"/>
                  <label for="pc26">26</label>
                </li>
                <li class="seat">
                  <input type="hidden" name="pc27" value="1">
                  <input type="checkbox" id="pc27" name="pc27" value ="0"/>
                  <label for="pc27">27</label>
                </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>
      <center><button type="submit" class="btn btn-default">Submit</button></center>
    </form>
</div>
@endsection

