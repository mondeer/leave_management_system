<div class="col-md-3 left_col">
    <div class="left_col scroll-view imondgray">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-dashboard"></i> <span>MTRH LMS!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile imondhr">
            <div class="profile_pic">
                <img src="{{ asset('images/mtrh.png')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome, <br>{{Sentinel::getUser()->first_name}}</span>

            </div>
        </div>
      <hr style="border-bottom: 10px solid #F20000;"></hr>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h2 class="imo">Human Resource</h2>
              <ul class="nav side-menu">
                <li><a href="/create/employee"><i class="fa fa-edit"></i>New Employee</a></li>
                <li><a href="/admin/leaves"><i class="fa fa-eye"></i>View All Leave applications</a></li>
                <li><a href="/admin/leaves"><i class="fa fa-check-circle"></i>HOD-Aprroved Leave Applications</a></li>
                <li><a href="/admin/onleave"><i class="fa fa-users"></i>Employees on Leave</a></li>
                <li><a href="/admin/onleave"><i class="fa fa-xing-square"></i>Recall Employee On Leave</a></li>
              </ul>
            </div>
        </div>
      </div>
</div>
