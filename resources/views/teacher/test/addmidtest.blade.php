@extends('teacher.master')
@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Câu hỏi
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="/addmidtest/{{$course->id}}" method="POST">
                    	{!!csrf_field()!!}
                        <div class="form-group">
                            <label>Khóa Học</label>
                            <input class="form-control" value="{{$course->title}}" readonly />
                        </div>
                        <div class="form-group">
                            <label>Content </label>
                            <input class="form-control" name="content"  placeholder="Nhập câu hỏi" />
                        </div>
                        <div class="form-group">
                            <label>Đáp Án A: </label>
                            <input class="form-control" name="a"  placeholder="Nhập câu hỏi" />
                        </div>
                        <div class="form-group">
                            <label>Đáp Án B: </label>
                            <input class="form-control" name="b"  placeholder="Nhập câu hỏi" />
                        </div>
                        <div class="form-group">
                            <label>Đáp Án C:</label>
                            <input class="form-control" name="c"  placeholder="Nhập câu hỏi" />
                        </div>
                        <div class="form-group">
                            <label>Đáp Án D: </label>
                            <input class="form-control" name="d"  placeholder="Nhập câu hỏi" />
                        </div>
                        <div class="form-group">
                            <label>Đáp Án Đúng </label>
                            <select class="form-control" name="keytrue" id="keytrue">
                                
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">D</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Thêm</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection