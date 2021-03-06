@extends('teacher.master')
@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Học Sinh
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="/addstudent/{{$course->id}}" method="POST">
                    	{!!csrf_field()!!}
                        <div class="form-group">
                            <label>Khóa Học</label>
                            <input class="form-control" value="{{$course->title}}" readonly />
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <select class="form-control" name="user" id="user">
                                @foreach($user as $t)
                                <option value="{{$t->id}}">{{$t->email}}</option>
                                @endforeach
                                
                            </select>
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