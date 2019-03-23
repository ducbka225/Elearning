@extends('master')
@section('content')
<!-- header-title -->
<div class="header-title">
	<h1>{{$categorybyid->name}}</h1>
</div>
<!-- /header-title -->	
	<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				@foreach($coursebycat as $c)
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="viewed-courses-box">
							<div class="viewed-courses-img">
								<img src="source/assets/img/{{$c->course_avatar}}" alt="">
							</div>
							<div class="viewed-courses-text">
								<a href="{{route('chitiet', $c->id)}}">
									<h6>{{$c->title}}</h6>
								</a>
								<p>By : {{$c->teacher->name}}</p>
								<div class="star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
								<div class="price">
									{{$c->price}} <span>$300</span>
								</div>
								<a href="#" class="ank5">Đăng Ký Học</a>
							</div>
						</div>
				</div>
				@endforeach
				<div class="text-center col-md-12">
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.courses -->
	</section>
@endsection