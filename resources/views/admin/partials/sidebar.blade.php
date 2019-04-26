<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>David Green<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li><a href="{{url('admin/dashboard')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-wrench"></span><p>Settings</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href=" {{url('admin/user')}} ">Users</a></li>
                    <li><a href=" {{url('admin/role')}} ">Role</a></li>
                </ul>
            </li>
            
            <!-- 3 level menu -->
            <!-- <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-flash"></span><p>Levels</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Level 3.1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Level 2.2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Level 1.2</a></li>
                </ul>
            </li> -->
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
