@extends('layouts.app')

@section('content')

<div class="imondopac">
  <h1 class="imondwhite">Register to MTRH LMS</h1>
  <form class="form-horizontal" role="form" method="POST" action="/postregister">
      {{ csrf_field() }}

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">First Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
          </div>
      </div>

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">Last Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
          </div>
      </div>

      <div class="form-group">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          </div>
      </div>

      <div class="form-group">
          <label class="col-md-4 control-label">User Role</label>
          <select class="" name="role">
            <option></option>
            <option>admin</option>
            <option>hr</option>
            <option>hod</option>
            <option>employee</option>
          </select>
      </div>

      <div class="form-group">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

          </div>
      </div>


      <div class="form-group">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
              <a class="btn btn-success" href="/">
                  Login
              </a>
          </div>
      </div>
  </form>
</div>

@endsection
