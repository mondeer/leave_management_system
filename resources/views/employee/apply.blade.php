@extends('employee.home')

@section('content')
  <div class="row">
    <h1>Apply For Leave</h1>
    <hr><hr>

    <form class="form-horizontal" action="/leave/apply" method="post">
      {{csrf_field()}}
      <div class="col-md-8">

        <div class="form-group">
          <label class="col-md-2">First Name</label>
          <div class="">
            <input class="col-md-3" type="text" name="f_name" value="{{old('f_name')}}" placeholder="Employee First Name" required>
          </div>
          <label class="col-md-2">Last Name</label>
          <div class="">
            <input class="col-md-3" type="text" name="l_name" value="{{old('l_name')}}" placeholder="Last Name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">PF Number</label>
          <div class="">
            <input class="col-md-3" type="number" name="pf_number" value="{{old('pf_number')}}" placeholder="Personal Number" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Leave Days</label>
          <div class="">
            <input class="col-md-3" type="text" name="leave_days" value="{{old('leave_days')}}" placeholder="Number of Leave-Days" required>
          </div>
        </div>

        <div class="align-center">
          <input class="btn btn-success col-md-offset-4" type="submit" name="" value="Submit">
        </div>
      </div>
    </form>
  </div>
@endsection
