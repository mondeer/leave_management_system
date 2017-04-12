<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-dashboard"></i> <span>MTRH LMS!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/mond.jpg')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome, <br>Charity</span>

            </div>
        </div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>LMS Admin</h3>
                <ul class="nav side-menu">

                <li><a href="/create/employee">New Employee</a></li>
                  <li>
                      <a href="/admin/leaves">
                          <i class="fa fa-pencil"></i>
                          View Leave applications
                      </a>
                  </li>

                  <li>
                      <a href="/admin/onleave">
                          <i class="fa fa-eye"></i>
                          Employees on Leave
                      </a>
                  </li>

                </ul>
            </div>

        </div>
      </div>
</div>
