@extends('teacher.master')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài Học
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="postaddlesson/{{$course_id}}" method="POST">
                        	{!!csrf_field()!!}
                            <div class="form-group">
                                <label>Số Thứ Tự Bài Học</label>
                                <input class="form-control" name="txtLessonNumber" placeholder="Please Enter LessonNumber" required />
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Name" required />
                            </div>
                            <div class="form-group">
                                <label>Video</label>
                                <input class="form-control" name="txtVideo" placeholder="Please Enter Video"  required />
                            </div>
                            <div class="form-group">
                                <label>Tổng kết</label>
                                <textarea class="form-control" rows="3" name="txtSummary"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Thêm</button>
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