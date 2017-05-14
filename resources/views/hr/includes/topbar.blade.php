<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu imondgray">
        <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <div class="col-lg-5 text-center fh5co-link-wrap">
              <ul data-offcanvass="yes">
                <li><a href="#" class="call-to-action">Employees On Leave</a></li>
                <li><a href="#" class="call-to-action">View All Employees</a></li>
                <li><a href="#" class="call-to-action">Leave Report</a></li>
              </ul>
            </div>

            <div class="col-lg-6 imon">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <h5><span class="imo">{{Sentinel::getUser()->first_name}}<span class=" fa fa-angle-down"></span></span></h5>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</div>
<!-- /top navigation -->
