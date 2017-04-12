@extends('hr.home')

@section('content')
  <div class="row">
    <h1>Enter Employee Into the system</h1>
    <hr><hr>

    <form class="form-horizontal" action="/create/employee" method="post">
      {{csrf_field()}}
      <div class="col-md-8">

        <div class="form-group">
          <label class="col-md-2">First Name</label>
          <div class="">
            <input class="col-md-3" type="text" name="f_name" value="{{old('f_name')}}">
          </div>
          <label class="col-md-2">Last Name</label>
          <div class="">
            <input class="col-md-3" type="text" name="l_name" value="{{old('l_name')}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">PF Number</label>
          <div class="">
            <input class="col-md-3" type="number" name="pf_number" value="{{old('pf_number')}}">
          </div>
          <label class="col-md-2">Gender</label>
          <div class="">
            <input class="col-md-3" type="text" name="gender" value="{{old('gender')}}">
          </div>
        </div>

        <div class="form-group">

          <label class="col-md-3">Date of Appointment</label>
          <div class="">
            <input class="col-md-3" type="text" name="dop" value="{{old('dop')}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Department</label>
          <div class="">
            <input type="text" name="department" value="{{old('department')}}">
          </div>
        </div>


        <div class="align-center">
          <input class="btn btn-success col-md-offset-4" type="submit" name="" value="Submit">
        </div>
      </div>
    </form>
  </div>
@endsection
