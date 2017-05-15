@extends('hr.home')

@section('content')
  <div class="row">
    <h1>Enter Leave Information</h1>
    <hr><hr>

    <form class="form-horizontal" action="/leave/type" method="post">
      {{csrf_field()}}
      <div class="col-md-12">

        <div class="form-group">
          <label class="col-md-1">Name of Leave</label>
          <div class="">
            <input class="col-md-2" type="text" name="leave_name" value="{{old('leave_name')}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-1">Minimum Days</label>
          <div class="">
            <input class="col-md-2" type="text" name="min_days" value="{{old('min_days')}}">
          </div>
          <label class="col-md-1">Maximum Days</label>
          <div class="">
            <input class="col-md-2" type="text" name="max_days" value="{{old('max_days')}}">
          </div>
        </div>

        <div class="align-center">
          <button class="call-to-action btn-lg align-center" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
