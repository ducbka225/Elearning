@extends('master')
@section('content')
<hr>
<div class="header-title">
	<h1>Thông Tin Giáo Viên</h1>
</div>
<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- .student-outer -->
					<div class="student-outer">
						<div class="student-img">
							<h6><img src="source/assets/img/{{$user->avatar}}" width="300px" ></h6>
						</div>
						<!-- <div class="student-text">
							<a href="student/updateinfo">
								Cập nhật thông tin
						 	</a>	
							<a href="changepassword">
								Đổi Mật Khẩu
						 	</a>	 -->
							<!-- <a href="student/coursejoin">
								Khóa học tham gia
						 	</a>	
							<a href="/student/naptien">
							 	Nạp Tiền
						 	</a>	 -->
						<!-- </div> -->
					</div>
					<!-- /.student-outer -->					
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">	
					<!-- .student-info -->
					<div class="student-info">
						@if(Session::has('message'))
			            <div class="alert alert-success">{{Session::get('message')}}</div>
			            @endif
			            @if(Session::has('loi'))
			            <div class="alert alert-danger">{{Session::get('loi')}}</div>
			            @endif
						<h3>{{$user->name}} </h3>
						<ul>
							<li><span>Địa chỉ :</span> {{$user->address}}</li>
							<li><span>E-mail:</span> {{$user->email}}</li>
							<li><span>Số điện thoại:</span> {{$user->phone_number}}</li>
							<li><span>Kinh nghiệm :</span> {{$user->exp}}</li>
						</ul>
					</div>
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>

	<style type="text/css">
		.student-text>a {
		    background: rgb(9, 26, 47) none repeat scroll 0 0;
		    color: rgb(255, 255, 255);
		    float: left;
		    margin: 0 28px 23px 0;
		    padding: 15px 0;
		    text-align: center;
		    width: 46%;
		}
	</style>
@endsection