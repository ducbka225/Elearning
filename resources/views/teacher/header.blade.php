    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding: 0px" href="teacher/course"><img src="source/assets/img/logo.png" alt="logo"/></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   @if(Auth::check())
                    <li>Chào bạn: {{Auth::user()->name}}</li>
                   @endif 
                   <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông Tin Cá Nhân</a>
                    </li>
                    <li><a href="/callvideo"><i class="fa fa-gear fa-fw"></i> Gọi Trực Tuyến</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/teacher/logout"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        @include('teacher.menu')
    </nav>
    <!-- /#page-wrapper -->
