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
						<ul>
							<li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> <sup>10</sup></a></li>
							<li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-cog" aria-hidden="true"></i></a>
								<!-- .setting .dropdown-menu -->
								 <div class="setting dropdown-menu">
									 <img src="source/assets/img/{{$chitietcourse->course_avatar}}" alt="dropdown-setting-img"/>
									 <div class="setting-ul">
									 	<ul>
											<li>
												<div class="search-box">
													<input type="text" placeholder="Search Type"/>
													<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
												</div>
											</li> 
											<li><a href="#">Quick Question <span>20</span></a></li> 
											<li><a href="#">Total Videos</a></li> 
											<li><a href="#">Video Lecture</a></li> 
											<li><a href="#">Assignment</a></li> 
											<li><a href="#">Notice Board</a></li> 
											<li><a href="#">Exams</a></li> 
											<li><a href="#">Results and Ranking</a></li> 
										</ul>
									 </div>
								</div>
								<!-- /.setting .dropdown-menu -->
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
						<img src="source/assets/img/{{$chitietcourse->course_avatar}}" alt="vedio-img"/>
					</div>
					<!-- /.vedio-box -->
					<!-- .vedio-box -->
					<div class="vedio-box-text">
						<ul>
							<li><span>Tên Khóa Học :</span> {{$chitietcourse->title}}</li>
							<li><span>Giáo viên :</span> {{$chitietcourse->teacher->name}} </li>
							<li><span>Mã khóa học :</span> {{$chitietcourse->course_number}}</li>
							<li><span>Thời lượng :</span> {{$chitietcourse->lenght}}</li>
							<li><div class="star"><!-- <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> -->  <span>{{$chitietcourse->course_rate}} /5 Điểm - {{$count_student}} Học viên tham gia </span></div></li>
							<li><a href="{{route('lessonfirst', $chitietcourse->id)}}">Join Now</a></li>
						</ul>
					</div>
					<!-- /.vedio-box -->
				</div>
				<div class="upcomming-container col-xs-12 col-sm-6 col-md-6 wow fadeInRight  animated">
					<div class="tab">
					  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Giảng Viên</button>
					  <button class="tablinks" onclick="openCity(event, 'Paris')">Nội Dung</button>
					</div>

					<div id="London" class="tabcontent">
					  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
					  <h3>{{$chitietcourse->teacher->name}}</h3>
					  <p>{{$chitietcourse->teacher->exp}}</p>
					</div>

					<div id="Paris" class="tabcontent">
						<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>

					  	@foreach($lesson as $l)
							<p style="color: green">{{$l->name}}</p>
						@endforeach	

					</div>

					<script>
					function openCity(evt, cityName) {
					  var i, tabcontent, tablinks;
					  tabcontent = document.getElementsByClassName("tabcontent");
					  for (i = 0; i < tabcontent.length; i++) {
					    tabcontent[i].style.display = "none";
					  }
					  tablinks = document.getElementsByClassName("tablinks");
					  for (i = 0; i < tablinks.length; i++) {
					    tablinks[i].className = tablinks[i].className.replace(" active", "");
					  }
					  document.getElementById(cityName).style.display = "block";
					  evt.currentTarget.className += " active";
					}

					// Get the element with id="defaultOpen" and click on it
					document.getElementById("defaultOpen").click();
					</script>
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
							<form action="comment_course/{{$chitietcourse->id}}" role="form" method="post">
								{!!csrf_field()!!}
								<div class="form-group">
									<textarea class="form-control" rows="3" name="commentcourse"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Gửi</button>
							</form>
						</div>
						@endif
						<!-- .questions -->
						<!-- .discussion-comment -->
						<div class="discussion-comment">
							<ul>
								@foreach($chitietcourse->user_course_comment as $cm)
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