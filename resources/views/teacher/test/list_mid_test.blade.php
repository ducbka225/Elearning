    @extends('teacher.master')
    @section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Câu hỏi
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
                                <th>Nội Dung</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                               	<th>D</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($mid_test as $mt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$mt->id}}</td>
                                <td>{{$mt->content}}</td>
                                <td>{{$mt->keya}}</td>
                                <td>{{$mt->keyb}}</td>
                                <td>{{$mt->keyc}}</td>
                                <td>{{$mt->keyd}}</td>

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
                <hr>
            <a href="/addmidtest/{{$course->id}}">
              <button type="button" class="btn btn-primary">Thêm Câu Hỏi</button>
            </a>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        
    @endsection