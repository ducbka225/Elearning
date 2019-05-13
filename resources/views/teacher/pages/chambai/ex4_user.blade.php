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
						    <label>Bài Tập 2</label>
						    <ul style="list-style: none;">
						    	<?php $tt = 0; ?>
						    	@foreach($join_table as $jt)
						    	<li>
						    		<label>{{++$tt}} . Đáp án của học sinh</label>

						    		<p><a href="{{route('downloadfile', $jt->id)}}" class="btn btn-primary">Tải Về Bài giải</a></p>
									<br>
									<div style="margin-left: 20px; margin: center">
										<form  method="POST" action="/teacher/chambai/ex4/{{$jt->id}}">
											{!!csrf_field()!!}
											<textarea rows="3" name="result"  style="width: 100%">{{$jt->result}}</textarea>
											<button type="submit" class="btn btn-success" >
											Nhận Xét</button>
										</form>	
									</div>									
						    	</li>
						    	<br>
						    	@endforeach

						    </ul>
						    <button class="btn btn-danger btnBack" onclick="window.history.back();" > << Quay Lại </button>
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