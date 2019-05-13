@extends('master')
@section('content')
<div class="header-title">
	<h1>Chỉnh Sửa Thông Tin</h1>
</div>
<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- .student-outer -->
					<div class="student-outer">
						<div class="student-img">
							<h6><img src="source/assets/img/{{$user->avatar}}" width="200px" ></h6>
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
					<div class="student-info">
						@if(Session::has('message'))
			            <div class="alert alert-success">{{Session::get('message')}}</div>
			            @endif
			            @if(Session::has('loi'))
			            <div class="alert alert-danger">{{Session::get('loi')}}</div>
			            @endif
						<form action="student/updateinfo" method="Post" enctype="multipart/form-data">
							{!!csrf_field()!!}
						  <h2>Thay Đổi thông tin cá nhân</h2>
						  <div class="input-container">
						    <i class="fa fa-user icon"></i>
						    <input class="input-field" type="text" value="{{$user->name}}" name="name">
						  </div>

						  <div class="input-container">
						    <i class="fa fa-envelope icon"></i>
						    <input class="input-field" type="text" placeholder="Email" name="email" readonly value="{{$user->email}}">
						  </div>

						  <div class="input-container">
						    <i class="fa fa-address-card-o icon"></i>
						    <input class="input-field" type="text" value="{{$user->address}}" name="address" >
						  </div>

						  <div class="input-container">
						    <i class="fa fa-phone-square icon"></i>
						    <input class="input-field" type="text" value="{{$user->phone_number}}" name="phone" >
						  </div>
						  <div class="input-container">
						  <i class="fa fa-photo icon"></i> 
						  <input class="input-field" type="file" name="avatar" placeholder="Chọn ảnh đại diện">
						  </div>
						  <button type="submit" class="btn">Cập Nhật</button>
						</form>
					</div>
					<!-- .student-info -->
				</div>				
				
			</div>
		</div>
		<!-- /.courses -->
	</section>

	<style type="text/css">
		* {box-sizing: border-box;}

		/* Style the input container */
		.input-container {
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		/* Style the form icons */
		.icon {
		  padding: 10px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		/* Style the input fields */
		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		/* Set a style for the submit button */
		.btn {
		  background-color: dodgerblue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.btn:hover {
		  opacity: 1;
		}
	</style>
@endsection
