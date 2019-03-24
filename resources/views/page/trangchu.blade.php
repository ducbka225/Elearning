@extends('master')
@section('content')
<section class="for-box">
		<!-- .for-box -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft  animated">
					<div class="clr1">
						<div class="for-box-crecl">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<h2>
							Over 40 million<br/> Students
						</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft  animated">
					<div class="clr1">
						<div class="for-box-crecl">
							<i class="fa fa-bookmark" aria-hidden="true"></i>
						</div>
						<h2>
							More Than 20,000<br/>courses
						</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight  animated">
					<div class="clr1">
						<div class="for-box-crecl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<h2>
							Free contact<br/> anytime
						</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight  animated">
					<div class="clr1">
						<div class="for-box-crecl">
							<i class="fa fa-line-chart" aria-hidden="true"></i>
						</div>
						<h2>
							Learn at your pace<br/>on any device
						</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /.for-box -->
	</section>

	<section class="viewed-courses">
		<!-- .viewed-courses -->
		<div class="container">
			<div class="row">
				<div class="tittle">
					<h2>Khóa học hot nhất</h2>
				</div>
				<div class="row">
					@foreach($hotcourse as $hc)
					<div class="col-xs-12 col-sm-3 col-md-3">
						<!-- .viewed-courses-box -->
						<div class="viewed-courses-box">
							<div class="viewed-courses-img">
								<img src="source/assets/img/{{$hc->course_avatar}}" alt="coureses-img1">
							</div>
							<div class="viewed-courses-text">
								<a href="{{route('chitiet', $hc->id)}}">
									<h6>{{$hc->title}}</h6>
								</a>
								<p>Bởi : {{$hc->teacher->name}}</p>
								<div class="star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
								<div class="price">
									{{$hc->price}} <span>$300</span>
								</div>
							</div>
						</div>
						<!-- /.viewed-courses-box -->
					</div>
					@endforeach
					<div class="col-md-12">
						<a href="#" class="button">Browse More Courses</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.viewed-courses -->
	</section>

	

	<section class="instructor-container">
		<!-- .instructor-container -->
		<div class="container">
			<div class="tittle">
				<h2>
					MEET OUR INSTRUCTOR
					<span class="customNavigation">
						<a class="btn prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
						<a class="btn next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</span>
				</h2>
			</div>
			<div class="row">
				<div class="owl-demo-outer">
					<!-- #owl-demo -->
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img1.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img2.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img3.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img4.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img5.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img6.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
						</div>
						<div class="item">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img1.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img2.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img3.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img4.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img5.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/instructor-img6.jpg" alt="instructor-img1" />
									</div>
									<h4>
										<a href="#">
									  	Felicia Richi Brown<br/>
									  	<span>Instructor, Ui/Ux Design</span>
									  </a>
									</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
									</p>
								</div>
								<!-- /.instructor -->
							</div>
						</div>

						<!-- /#owl-demo -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.instructor-container -->
	</section>

@endsection