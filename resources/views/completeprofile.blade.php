@extends('app')

@section('content')
<div class="container">

    <div class="row center-align">
      <h5>Please complete you profile so that we can help you better!!!</h5>
    </div>
    <div class="row">
    <form method="post" action="{{url('completeprofile')}}">
      <div class="row center-align">

            <div class="input-field col s12">
              <h6>YOUR University</h6>
             <select class="browser-default">
               <option value="1" selected>IPU</option>
             </select>
              </div>

      </div>

      <div class="row center-align">

            <div class="input-field col s12">
              <h6>YOUR Course</h6>
             <select class="browser-default">
               <option value="1" selected>B.Tech</option>
             </select>
              </div>

      </div>
      <div class="row center-align">

            <div class="input-field col s12">
              <h6>YOUR Branch</h6>
             <select class="browser-default">
               <option value="1" selected>IT</option>
             </select>
              </div>

      </div>
      <div class="row center-align">
        <input type="submit"class="btn btn-lg orange"></button>
              <button class="btn btn-lg orange"><a href="{{url('/dashboard')}}">Skip</a></button>
      </div>
    </form>
</div>
</div>
@endsection
