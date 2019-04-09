    @extends('teacher.master')
    @section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Student
                            <small>List</small>
                        </h1>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>

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