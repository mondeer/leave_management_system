@extends('hr.home')

@section('content')
<h1 class="text-center">Leave Applications</h1>
  <table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Leave Days</th>
        <th>Edit</th>

    </tr>
    </thead>
    <tbody>

      @foreach($leaves as $leave)
        <tr>
          <td>{{$leave->id}}</td>
          <td>{{$leave->}} {{$leave->l_name}}</td>
          <td>{{$leave->leave_days}}</td>
          <td>
            <a href="/leaves/edit/{{$leave->id}}">Edit</a>
          </td>
          <td>
            <form action="/admin/approve/{{ $leave->id }}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="btn btn-primary" value="Approve">
            </form>
          </td>
          <td>
            <form class="delete" action="/admin/leave/{{ $leave->id }}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
