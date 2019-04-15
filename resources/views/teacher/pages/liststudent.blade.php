    @extends('teacher.master')
    @section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
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
                                <th>Address</th>
                                <th>Avatar</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($student as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{$st->id}}</td>
                                <td>{{$st->name}}</td>
                                <td>{{$st->email}}</td>
                                <td>{{$st->address}}</td>
                                <td><img src="source/assets/img/{{$st->avatar}}" width="150px" height="100px"></td>
                                <td>
                                    @if($st->role == 0)
                                    <p class="text-primary">Học Sinh</p>
                                    @elseif($st->role == 1)
                                    <p class="text-success">Giáo Viên</p>
                                    @else
                                    <p class="text-danger">Admin</p>
                                    @endif
                                    
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/deleteuser/{{$st->id}}"> Delete</a></td>

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @endsection