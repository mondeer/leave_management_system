@extends('hr.dashboard')

@section('main_container')
    <div class="right_col" role="main">
        @yield('content')
    </div>

        <footer class="imondgray">
            <div class="pull-right imondgray">
              <h4>&copy;2017 MTRH LMS by <a href="#">Charity</a></h4>
            </div>
            <div class="clearfix"></div>
        </footer>


@endsection
