@extends('master')
@section('content')
<div class="header-title">
	<h1>Các Khóa Học Tham Gia</h1>
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
							<a href="/student/naptien">
							 	Nạp Tiền
						 	</a>	
						</div>
					</div>
					<!-- /.student-outer -->					
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">	
					<!-- .student-info -->
					@foreach($register as $r)
					<div class="col-md-8">
						<div class="w3-green w3-center">{{$r->course->title}}</div>
						<div class="w3-grey">
					  	<div class="w3-container w3-red w3-center" hidden style="width:50%">
					  		50%
						</div>
					</div>
					</div>
					
					<div class="col-md-2 w3-green">
						<a href="lessonfirst/{{$r->course->id}}">Chi tiết >></a>
					</div>
					<hr>
					@endforeach
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>

	<style type="text/css">
		.block {
		  display: block;
		  width: 100%;
		  border: none;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 28px;
		  font-size: 16px;
		  cursor: pointer;
		  text-align: center;
		}

		.block:hover {
		  background-color: #ddd;
		  color: white;
		}

		.block a{
			color: white;
		}
	</style>
@endsection
