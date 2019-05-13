    @extends('teacher.master')
    @section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khóa Học
                            <small>Danh Sách</small>
                        </h1>
                        @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                        @if(Session::has('loi'))
                        <div class="alert alert-danger">{{Session::get('loi')}}</div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã KH</th>
                                <th>Tiêu Đề</th>
                                <th>Ảnh</th>
                                <th>Thời Lượng</th>
                                <th>Giá</th>
                                <th>Học viên Đăng kí</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listCourse as $lc)
                            <tr class="even gradeC" align="center">
                                <td>{{$lc->course_number}}</td>
                                <td>{{$lc->title}}</td>
                                <td><img src="../source/assets/img/{{$lc->course_avatar}}" width="70px" height="45px" alt=""></td>
                                <td>{{$lc->lenght}}</td>
                                <td>{{number_format($lc->price)}} VND</td>
                                <td class="center"> <a href="/liststudent/{{$lc->id}}">Danh sách</a></td>
                                <td class="center">
                                    <a href="/chat/{{$lc->id}}" title="Chat trực tuyến"> Chat
                                    </a> |
                                	<a href="#"><i class="fa fa-trash-o  fa-fw"></i></a> | 
                                	<a href="/listmidtest/{{$lc->id}}" title="Thêm bài thi">
							          <span class="glyphicon glyphicon-plus"></span>
							        </a> | 
							        <a href="/teacher/lesson/{{$lc->id}}">
							          <span class="glyphicon glyphicon-list-alt"></span>
							        </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    @endsection