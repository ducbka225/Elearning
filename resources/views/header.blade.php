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
									<li><a href="login.html">Đăng Nhập</a></li>
									<li>|</li>
									<li><a href="sign-up.html">Đăng Ký</a></li>
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
								<a class="navbar-brand" href="#"><img src="source/assets/img/logo.png" alt="logo"/></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
								<ul class="nav navbar-nav">
									<li>
										<a href="index-2.html">Home</a>										
									</li>
									<li>
										<a href="about.html">About Us</a>										
									</li>
									<li class="dropdown">
										<a href="courses.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Khóa Học</a>
										 <div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">
                                 <div class="col-sm-12 col-md-12">
                                    <ul>    
                                    @foreach($category as $cat)                                   
                                       <li><a href="courses.html">{{$cat->Name}}</a></li>
                                    @endforeach
                                    </ul>
                                 </div>                                 
                              </div>
									</li>
									<li>
										<a href="teacher.html">Teacher</a>
									</li>
									<li>
										<a href="student-portfolio.html">Student Profile</a>										
									</li>
									<li>
										<a href="pricing.html"><span>Pricing</span></a>
									</li>
									<li>
										<a href="contact.html"><span>Contact</span></a>
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

		<div class="header-text">
			<div class="col-xs-12 col-sm-5 col-md-5">
			</div>
			<div class="header-bg col-xs-12 col-sm-7 col-md-7">
				<h1>DON’T HAVE SPACE ON CAMPUS? LET’S START ONLINE</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tellus faucibus vel hendrerit sed, aliquet a est. Cras dapibus nisl non metus viverra, ac convallis eros viverra.Lorem ipsum dolor sit </p>
				<a href="#" class="header-btn">Find courses Now</a>
			</div>
		</div>

	</header>