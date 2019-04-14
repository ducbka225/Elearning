@extends('master')
@section('content')
<div class="header-title">
	<h1>STUDENT PROFILE</h1>
</div>
<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- .student-outer -->
					<div class="student-outer">
						<div class="student-img">
							<h6><img src="source/assets/img/{{$user->avatar}}" ></h6>
						</div>
						<div class="student-text">
							<a href="student/updateinfo">
								Cập nhật thông tin
						 	</a>	
							<a href="changepassword">
								Đổi Mật Khẩu
						 	</a>	
							<a href="student/coursejoin">
								Khóa học tham gia
						 	</a>	
							<a href="#">
							 	Nạp Tiền
						 	</a>	
						</div>
					</div>
					<!-- /.student-outer -->					
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">	
					<!-- .student-info -->
					<div class="student-info">
						<h3>{{$user->name}} </h3>
						<ul>
							<li><span>các khóa học tham gia :</span> 
							@foreach($register as $r) 
								{{$r->course->title}}; 
							@endforeach
							</li>
							<li><span>Địa chỉ :</span> {{$user->address}}</li>
							<li><span>E-mail:</span> {{$user->email}}</li>
							<li><span>Số điện thoại:</span> {{$user->phone_number}}</li>
							<li><span>Balance :</span> {{$user->balance}} VNĐ</li>
						</ul>
					</div>
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>
@endsection