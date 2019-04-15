@extends('teacher.master')
@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Course
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="/admin/addcourse" enctype="multipart/form-data" method="POST">
                        {!!csrf_field()!!}
                        <div class="form-group">
                            <label>Loại Khóa Học</label>
                            <select class="form-control" name="category" id="category">
                                @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach    
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" placeholder="Please Enter Title" required />
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Please Enter Price" required />
                        </div>
                        <div class="form-group">
                            <label>Mã Khóa Học</label>
                            <input class="form-control" name="course_number" required />
                        </div>
                        <div class="form-group">
                            <label>Thời Lượng</label>
                            <input  class="form-control"  name="lenght" required/>
                        </div>
                        <div class="form-group">
                            <label>Avatar Khóa Học</label>
                            <input type="file" name="course_avatar" required/>
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