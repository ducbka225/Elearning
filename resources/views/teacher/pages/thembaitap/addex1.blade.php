@extends('teacher.master')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài Phát Âm
                            <small>Thêm</small>
                        </h1>
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('error'))
                        <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="/teacher/themex1/{{$lesson_id}}" method="POST" enctype="multipart/form-data">
                        	{!!csrf_field()!!}
                            
                            <input type="file" name="filename" value="upload">
                            <br>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-danger">Đặt Lại</button>
                            <button type="reset" class="btn btn-default"><a href="/teacher/baitap/{{$lesson_id}}">Quay Lại</a></button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection