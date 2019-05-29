    @extends('teacher.master')
    @section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Học Sinh
                            <small>Danh Sách</small>
                        </h1>
                        @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($student as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{$st->user->id}}</td>
                                <td>{{$st->user->name}}</td>
                                <td>{{$st->user->email}}</td>
                                <td>{{$st->user->address}}</td>
                                <td><img src="source/assets/img/{{$st->user->avatar}}" width="150px" height="100px"></td>
                                
                                <td class="center">
                                    <a href="/deletestudent/{{$st->id_course}}/{{$st->id_user}}"> Xóa</a> |
                                    <a href="/addstudent/{{$st->id_course}}"> Thêm</a>
                                </td>

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
                <hr>
            <a href="/addstudent/{{$id}}">
              <button type="button" class="btn btn-primary">Thêm Học sinh</button>
            </a>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        
    @endsection