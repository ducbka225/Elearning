@extends('teacher.master')
@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người Dùng
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="/amdin/adduser" method="POST">
                    	{!!csrf_field()!!}
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter email" />
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input  class="form-control" name="address" placeholder="Please Enter Address" />
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="number" class="form-control" name="phone" placeholder="Please Enter Address" />
                        </div>
                        <div class="form-group">
                            <label>Exp</label>
                            <TEXTAREA class="form-control" name="exp" row="2"></TEXTAREA> 

                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <label class="radio-inline">
                                <input name="role" value="0" checked="" type="radio">Học Sinh
                            </label>
                            <label class="radio-inline">
                                <input name="role" value="1" type="radio">Giáo Viên
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Thêm</button>
                        <button type="reset" class="btn btn-danger">Đặt Lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection