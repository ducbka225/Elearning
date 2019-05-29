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
                    <div class="col-lg-12" style="padding-bottom:20px">
                        <div class="col-lg-3" style="background: Green; height: 100px; text-align: center;">
                            <a href="/teacher/chambai/ex1/{{$lesson_id}}" style="color: white"><h2>Phát âm </h2></a>
                        </div>
                        		
                        <div class="col-lg-3" style="background: blue; height: 100px; text-align: center;">
                            <a href="/teacher/chambai/ex2/{{$lesson_id}}" style="color: white"><h2>Nghe </h2></a>
                        </div>
                		
                        	
                        	<!-- <li>
                        		<a href="/teacher/chambai/ex2/{{$lesson_id}}"><h2>Điền Từ >></h2></a>
                        	</li> -->
                        <div class="col-lg-3" style="background: red; height: 100px; text-align: center;">
                            <a href="/teacher/chambai/ex4/{{$lesson_id}}" style="color: white"><h2>Trắc Nghiệm </h2></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-success btnBack" onclick="window.history.back();" > << Quay Lại </button>
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection