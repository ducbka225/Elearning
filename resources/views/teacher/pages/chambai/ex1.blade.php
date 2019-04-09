@extends('teacher.master')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phát âm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <div class="row row-no-gutters">
					    <div class="col-lg-6" style="background-color:lavender;">
						    <label>Bài Tập 1</label>
						    <ul style="list-style: none;">
						    	<?php $tt=0; ?>
						    	@foreach($ex1 as $e1)
						    	<li>
						    		<label>{{++$tt}}</label>
						    		<audio controls>
									  <source src="source/assets/audio/{{$e1->file}}" type="audio/mpeg">
									</audio>
						    	</li>
						    	@endforeach

						    </ul>
						    <hr>
						</div>

						<div class="col-lg-6">
							<table class="table table-striped table-bordered table-hover" >
		                        <thead>
		                            <tr align="center">
		                                <th>Học Sinh</th>
		                                <th>Action</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	@foreach($student as $st)
		                            <tr class="odd gradeX" align="center">
		                                <td>{{$st->name}}</td>
		                                <td class="center"><a href="/teacher/chambai/ex1/{{$lesson_id}}/{{$st->id}}"> Xem Bài Làm</a></td>
		                            </tr>
		                            @endforeach
		                            
		                        </tbody>
		                    </table>
		                    <button class="btn btn-danger btnBack" onclick="window.history.back();" > << Back </button>
						    <hr>
						</div>					   
				    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection