@extends('employee.home')

@section('content')
  <div class="row">
    <h1>Apply For Leave</h1>
    <hr><hr>

    <form class="form-horizontal" action="/leave/apply" method="post">
      {{csrf_field()}}
      <div class="col-md-8">

        <div class="form-group">
          <label class="col-md-2">Type of Leave</label>
          <div class="">
            <input class="col-md-3" type="text" name="leave_type" value="{{old('leave_type')}}" placeholder="Type of Leave" required>
          </div>
          <label class="col-md-2">Start Date</label>
          <div class="">
            <input class="col-md-3" type="date" name="start_date" value="{{old('start_date')}}" placeholder="Leave Start Date" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">End Date</label>
          <div class="">
            <input class="col-md-3" type="date" name="end_date" value="{{old('end_date')}}" placeholder="Leave ending Date" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Comments</label>
          <div class="">
            <input class="col-md-3" type="textarea" name="comments" value="{{old('comments')}}" placeholder="Comments" required>
          </div>
        </div>

        <div class="align-center">
          <input class="btn btn-success col-md-offset-4" type="submit" name="" value="Submit">
        </div>
      </div>
    </form>
  </div>
@endsection
