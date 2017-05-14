@extends('hr.home')

@section('content')
  <div class="row">
    <h1>Enter Employee Into the system</h1>
    <hr><hr>

    <form class="form-horizontal" action="/create/employee" method="post">
      {{csrf_field()}}
      <div class="col-md-12">

        <div class="form-group">
          <label class="col-md-1">PF Number</label>
          <div class="">
            <input class="col-md-2" type="number" name="pf_number" value="{{old('pf_number')}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-1">First Name</label>
          <div class="">
            <input class="col-md-2" type="text" name="first_name" value="{{old('first_name')}}">
          </div>
          <label class="col-md-1">Middle Name</label>
          <div class="">
            <input class="col-md-2" type="text" name="middle_name" value="{{old('middle_name')}}">
          </div>
          <label class="col-md-1">Last Name</label>
          <div class="">
            <input class="col-md-2" type="text" name="last_name" value="{{old('last_name')}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-1">Department</label>
          <div class="">
            <input class="col-md-2" type="text" name="department" value="{{old('department')}}">
          </div>
          <label class="col-md-1">Designation</label>
          <div class="">
            <input class="col-md-2" type="text" name="designation" value="{{old('designation')}}">
          </div>
          <label class="col-md-1">Mobile N0.</label>
          <div class="">
            <input class="col-md-2" type="text" name="mobile" value="{{old('mobile')}}">
          </div>
        </div>

        <div class="form-group">

          <label class="col-md-1">Email</label>
          <div class="">
            <input class="col-md-2" type="text" name="email" value="{{old('email')}}">
          </div>
        </div>

        <div class="align-center">
          <button class="call-to-action btn-lg align-center" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
