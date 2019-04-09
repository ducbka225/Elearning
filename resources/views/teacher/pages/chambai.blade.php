@extends('teacher.master')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chấm Bài
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <ul>
                        	<li>
                        		<a href="/teacher/chambai/ex1/{{$lesson_id}}"><h2>Phát âm >></h2></a>
                        	</li>
                        	<li>
                        		<a href="/teacher/chambai/ex2/{{$lesson_id}}"><h2>Nghe >></h2></a>
                        	</li>
                        	<li>
                        		<a href="/teacher/chambai/ex2/{{$lesson_id}}"><h2>Điền Từ >></h2></a>
                        	</li>
                        	<li>
                        		<a href="/teacher/chambai/ex2/{{$lesson_id}}"><h2>Trắc Nghiệm >></h2></a>
                        	</li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection