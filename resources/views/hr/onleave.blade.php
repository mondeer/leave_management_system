@extends('hr.home')

@section('content')
<h1 class="text-center">Employees On Leave</h1>
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

      @foreach($onleaves as $onleave)
        <tr>
          <td>{{$onleave->id}}</td>
          <td>{{$onleave->f_name}} {{$onleave->l_name}}</td>
          <td>{{$onleave->leave_days}}</td>
          <td>
            <form action="/admin/recall/{{ $onleave->id }}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="btn btn-primary" value="Recall">
            </form>
          </td>

        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
