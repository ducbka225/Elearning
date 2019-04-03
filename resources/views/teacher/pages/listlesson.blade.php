@extends('teacher.master')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lesson
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
                                <th>Mã BH</th>
                                <th>Tên</th>
                                <th>video</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listLesson as $ll)
                            <tr class="even gradeC" align="center">
                                <td>{{$ll->lesson_number}}</td>
                                <td>{{$ll->name}}</td>
                                <td>
                                	<iframe width="150px" height="70px" src="{{$ll->video}}">
									</iframe>
								</td>
                                <td class="center">
                                	<a href="deletelesson/{{$ll->id}}" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a> | 
                                	<a href="/teacher/addlesson/{{$course_id}}" title="Thêm bài Tập">
							          <span class="glyphicon glyphicon-plus"></span>
							        </a> | 
							        <a href="#">
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
            <hr>
            <a href="/teacher/addlesson/{{$course_id}}">
              <button type="button" class="btn btn-primary">Thêm Lesson</button>
            </a>
            <hr>
            <!-- /.container-fluid -->
        </div>
@endsection