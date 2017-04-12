@extends('employee.dashboard')

@section('main_container')
    <div class="right_col" role="main">
        @yield('content')
    </div>

        <footer class="imond">
            <div class="pull-right">
              &copy;2017 MTRH LMS by <a href="#">Charity</a>
            </div>
            <div class="clearfix"></div>
        </footer>


@endsection
