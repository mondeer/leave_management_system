@extends('employee.home')

@section('content')
<div class="widget-box">
<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
  <h5>Update Leave Details</h5>
</div>
<div class="widget-content nopadding">
  <form action="/leaves/edit/{{$leaves->id}}" method="POST" class="form-horizontal">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="put">

    <div class="control-group">

      <label class="control-label">Leave Days</label>
      <div class="controls">
        <input class="span7" type="text" name="leave_days" value="{{$leaves->leave_days}}">
      </div>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </form>
</div>
</div>
@endsection
