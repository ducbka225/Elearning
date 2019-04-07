	<header>
		<!-- top-menu -->
		<div class="top-menu">
			<!-- top-header -->
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="phone dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-globe" aria-hidden="true"></i> Ngôn ngữ : Tiếng Việt </a>
								 <ul class="dropdown-menu">
									 <li><a href="#">Tiếng Việt</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="social">
								<ul>
									@if(Auth::check())
									<li>Chào bạn: {{Auth::user()->name}}</li>
									<li>|</li>
									<li><a href="{{route('logout')}}">Đăng xuất</a></li>
									@else
									<li><a href="login">Đăng Nhập</a></li>
									<li>|</li>
									<li><a href="signup">Đăng Ký</a></li>
									@endif
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /top-header -->
			<!-- mainNav -->
			<div id="mainNav" class="navbar-fixed-top">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-inverse navbar-default">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index"><img src="source/assets/img/logo.png" alt="logo"/></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
								<ul class="nav navbar-nav">
									<li>
										<a href="index">Home</a>										
									</li>
									<li>
										<a href="callvideo">Call Video</a>										
									</li>
									<li class="dropdown">
										<a href="courses.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Khóa Học</a>
										 <div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">
                                 <div class="col-sm-12 col-md-12">
                                    <ul>    
                                    @foreach($category as $cat)                                   
                                       <li><a href="{{route('course', $cat->id)}}">{{$cat->name}}</a></li>
                                    @endforeach
                                    </ul>
                                 </div>                                 
                              </div>
									</li>
									<li>
										<a href="teacher.html">Giáo Viên</a>
									</li>
									<li>
										<a href="student-portfolio.html">Học Viên</a>										
									</li>
									<li>
										<a href="contact.html"><span>Liên Hệ</span></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
									</li>
								</ul>
								<!-- /.navbar-collapse -->
							</div>

						</nav>
					</div>
				</div>
			</div>
			<!-- /mainNav -->
		</div>
		<!-- /top-menu -->
	</header>