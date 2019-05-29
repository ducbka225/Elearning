@extends('master')
@section('content')
<section class="for-box">
		<!-- .for-box -->
		<div class="container">
		<div class="w3-content w3-display-container">
			  <img class="mySlides" src="source/assets/img/nhat.jpg" height="300px" style="width:100%">
			  <img class="mySlides" src="source/assets/img/courses-img2.jpg"  height="300px" style="width:100%">
			  <img class="mySlides" src="source/assets/img/courses-img3.jpg" height="300px"style="width:100%">
			  <img class="mySlides" src="source/assets/img/courses-img4.jpg" height="300px" style="width:100%">

			  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
								<img src="source/assets/img/{{$hc->course_avatar}}" width="270px" height="170px" alt="coureses-img1">
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
									@if($hc->price != 0)
									{{number_format($hc->price)}} VNĐ<!-- <span>$300</span> -->
									@else
									<p style="color: red">MIỄN PHÍ </p>
									@endif
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
					Giáo Viên
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
							@foreach($teacher as $t)
							<div class="col-xs-12 col-sm-4 col-md-4">
								<!-- .instructor -->
								<div class="instructor">
									<div class="instructor-img">
										<img src="source/assets/img/{{$t->avatar}}" width="50%" alt="instructor-img1" />
									</div>
									<h4>
										<a href="/teacher_profile/{{$t->id}}">
									  	{{$t->name}}<br/>
									  	<span>{{$t->email}}</span>
									  </a>
									</h4>
									<p>
										{{$t->exp}}
									</p>
								</div>
								<!-- /.instructor -->
							</div>
							@endforeach
						</div>					
						<!-- /#owl-demo -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.instructor-container -->
	</section>
	<style>
.mySlides {display:none;}
</style>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n)
 {
  showDivs(slideIndex += n);
}

function showDivs(n)
 {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

@endsection