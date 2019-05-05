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
							<li><span>Học phí :</span> {{number_format($chitietcourse->price)}} VNĐ	</li>
							<input type="hidden" id="price" value="{{$chitietcourse->price}}">
							<input type="hidden" id="id_course" value="{{$chitietcourse->id}}">
							<input type="hidden" id="balance" value="{{Auth::User()->balance}}">
							<li><div class="star"><!-- <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> -->  <span>{{$chitietcourse->course_rate}} /5 Điểm - {{$count_student}} Học viên tham gia </span></div></li>
							@if($checkstudent != null)
							<li><a href="{{route('lessonfirst', $chitietcourse->id)}}">Bắt Đầu Học</a></li>
							@else
							<li ><a id="register" href="javascript: void(0)">Đăng Ký</a></li>
							@endif
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

	<input type="hidden" value="{{csrf_token()}}" id="token"/>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#register").click(function() {
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				var price = $('#price').val();
				var course_id = $('#id_course').val();
				var balance = $('#balance').val();
				var token = $('#token').val();
				var r = confirm("Bạn phải trả " + price +" VNĐ");
			   	if (r == true) {
			   		if(balance > price ){
			   			var dataString = "price="+price+"&course_id="+course_id+"&balance="+balance+"&_token="+token;
			   			$.ajax({
			   				type : 'POST',
							url : "<?php echo url('/registercourse') ?>",
							data: dataString,

							success: function (result) {
								// console.log(data);
								if (result == true) {
									alert('Thanh toán thành công!');
									window.location.reload();
								} else {
									window.location.reload();
								}
							}
						});

						// $.post('/registercourse', {price:$price, course_id:$course_id, balance:$balance}, function(data){

						// });
			   		}
			   		else{
			   			alert(' Tài Khoản của bạn không đủ vui lòng nạp thêm tiền');
			   		}
			     	
			  	}
			  	else{
			  		window.location.reload();
			  	}
			});
		});
	</script>
@endsection