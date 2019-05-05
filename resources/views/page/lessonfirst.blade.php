@extends('master')
@section('content')
<!-- header-title -->
		<div class="header-title">
			<h1>{{$chitietcourse->title}}</h1>
		</div>
		<!-- /header-title -->
<!-- dashbord -->
		<div class="dashbord">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="classroom-container">
		<!-- .classroom-container -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 wow fadeInLeft  animated">
					<!-- .vedio-box -->
					<div class="vedio-box">
						<iframe width="500px" height="350px" src="{{$lessonshow->video}}">
						</iframe>
					</div>
					<!-- /.vedio-box -->
					<!-- .vedio-box -->
					<div class="vedio-box-text">
						<ul>
							<li><span>Bài học :</span> {{$lessonshow->name}}</li>
							<li><span>Giáo viên :</span> {{$chitietcourse->teacher->name}} </li>
							<li><span>Mã khóa học :</span> {{$chitietcourse->course_number}}</li>
							<li><span>Tổng kết :</span> {{$lessonshow->sumary}}</li>
						</ul>
					</div>
					<!-- /.vedio-box -->
				</div>
				<div class="upcomming-container col-xs-12 col-sm-6 col-md-6 wow fadeInRight  animated">
					<h2>
						Nội Dung
					</h2>
					<div class="row">
						<ul>
							<?php $i =0;?>
							@foreach($lesson as $l)
							<li style="width: 100%">
								<div class="upcommin-text-outer">
								<div class="upcomming-img">
								<label style="margin-left: 20px">{{++$i}}</label>
								</div>
								<div class="upcommin-text">
									<a href="{{route('lesson', $l->id)}}"><p>{{$l->name}}</p></a>
									<span><i class="fa fa-clock-o" aria-hidden="true"></i> {{$l->created_at}}</span>
								</div>
								</div>
							</li>
							@endforeach
						</ul>
						
					</div>
				</div><!-- Close div upcoming -->
			</div>
		</div>
		<!-- /.classroom-container -->
	</section>

	<section class="discussion-contaniner">
		<!-- .discussion-contaniner-->
		<div class="container">
			<div class="row">				
				<div class="discussion">
				<div class="col-xs-12 col-sm-12 col-md-6">
					@if(session('thongbao'))
						{{session('thongbao')}}
					@endif
						<h4>Bình luận</h4>
						<!-- .questions -->
						@if(Auth::check())
						<div>
							<form action="comment_lesson/{{$lessonshow->id}}" role="form" method="post">
								{!!csrf_field()!!}
								<div class="form-group">
									<textarea class="form-control" rows="3" name="commentlesson"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Gửi</button>
							</form>
						</div>
						@endif
						<!-- .questions -->
						<!-- .discussion-comment -->
						<div class="discussion-comment">
							<ul>
								@foreach($lessonshow->comment as $cm)
								<li>
									<div class="comment-text1">
										<img src="source/assets/img/{{$cm->user->avatar}}" alt="comment" width="50px" height="50px" />
										<div class="text">
											<strong>{{$cm->user->name}}</strong> <small>{{$cm->created_at}}</small>
											<p>{{$cm->content}}</p>	
										</div>
									</div>
								</li>
								@endforeach	
							</ul>
						</div>
						<!-- /.discussion-comment -->
					</div>
				</div>
				</div>
			</div>
		<!-- /.discussion-contaniner-->
	</section>
@endsection