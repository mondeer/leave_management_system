@extends('employee.home')

@section('content')
<h1 class="text-center">My Applications</h1>
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
          <td>{{$leave->f_name}} {{$leave->l_name}}</td>
          <td>{{$leave->leave_days}}</td>
          <td>
            <a href="/leaves/edit/{{$leave->id}}">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
