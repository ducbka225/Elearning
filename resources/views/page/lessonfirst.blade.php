@extends('master')
@section('content')
<!-- header-title -->
		<div class="header-title">
			<h1>{{$chitietcourse->title}}</h1>
		</div>
		<!-- /header-title -->
<!-- dashbord -->
		<!-- dashbord -->
		<div class="dashbord">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><a href="student/info"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
							<li><a href="/chat/{{$chitietcourse->id}}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-bell-o" aria-hidden="true"></i>
								 <sup>2</sup>
								</a>
								<div class="setting dropdown-menu">
									 <div class="setting-ul">
									 	<ul>
									 	@if($mid_test_result != 0)									<li><a href="/mid-test-result/{{$chitietcourse->id}}">Thi đầu kỳ</a></li> 
									 	@else
											<li><a href="/mid-test/{{$chitietcourse->id}}">Thi đầu kỳ</a></li> 
										@endif
										@if($end_test_result != 0)									<li><a href="/end-test-result/{{$chitietcourse->id}}">Thi cuối kỳ</a></li> 
									 	@else
											<li><a href="/end-test/{{$chitietcourse->id}}">Thi cuối kỳ</a></li> 
										@endif
										</ul>
									 </div>
								</div>
							</li>
							<li><a href="/chat/{{$chitietcourse->id}}" title="Chat trực tuyến"><i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>
							<li>
								<a href="callvideo" target="_blank" title="Call video">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
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
									<p>
										<a href="{{route('lesson', $l->id)}}">
										{{$l->name}} 
										</a>
										<?php $id = $l->id; ?>
										@if(in_array($id, $inputs))

										<label href="#" style="margin-left: 20px">
								          <img width="15px" src="source/assets/img/done.png">
								        </label>
										@endif 
									</p>
									
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
											<a href="#"><i class="fa fa-reply" aria-hidden="true"></i> reply</a>
										</div>
									</div>
								</li>
								<li>
									@foreach($cm->re_comment as $re_cm)
									<div class="comment-text1 reply">
										<img src="source/assets/img/{{$re_cm->user->avatar}}" width="50px" height="50px"  alt="comment">
										<div class="text">
											<strong>{{$re_cm->user->name}}</strong>
											<p>{{$re_cm->content}}</p>
										</div>
									</div>
									@endforeach
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