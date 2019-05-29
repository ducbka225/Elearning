@extends('teacher.master')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài Tập
                        </h1>
                        @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <div class="row row-no-gutters">
					    <div class="col-sm-6" style="background-color:lavender;">
						    <label>Bài Tập 1</label>
						    <ul style="list-style: none;">
						    	@foreach($ex1 as $e1)
						    	<li>
						    		<audio controls>
									  <source src="source/assets/audio/{{$e1->file}}" type="audio/mpeg">
									</audio>
						    	</li>
						    	@endforeach

						    </ul>
						    <hr>
				            <a href="/teacher/themex1/{{$lesson_id}}">
				              <button type="button" class="btn btn-primary">Thêm Câu hỏi</button>
				            </a>
						</div>
					    <div class="col-sm-6" style="background-color:lavenderblush;">
					    	<label>Bài Tập 2</label>
						    <ul style="list-style: none;">
						    	@foreach($ex2 as $e2)
						    	<li>
						    		<audio controls>
									  <source src="source/assets/audio/{{$e2->file}}" type="audio/mpeg">
									</audio>
						    	</li>
						    	@endforeach

						    </ul>
						    <hr>
				            <a href="/teacher/themex2/{{$lesson_id}}">
				              <button type="button" class="btn btn-primary">Thêm Câu hỏi</button>
				            </a>
						</div>
				    </div>

				    <hr>
				    <div class="row row-no-gutters">
					    <div class="col-sm-6" style="background-color:lavender;">
						    <label>Bài Tập 3</label>
						    <ol >
						    	@foreach($ex3 as $e3)
						    	<li>
						    		<p>{{$e3->Content}}</p>
						    	</li>
						    	@endforeach

						    </ol>
						    <hr>
				            <a href="/teacher/themex3/{{$lesson_id}}">
				              <button type="button" class="btn btn-primary">Thêm Câu hỏi</button>
				            </a>
						</div>
					    <div class="col-sm-6" style="background-color:lavenderblush;">
					    	<label>Bài Tập 4</label>
					    	@if($ex4 == null)
					    	<br>
					            <a href="/teacher/themex4/{{$lesson_id}}">
					              <button type="button" class="btn btn-primary">Thêm Câu hỏi</button>
					            </a>
				            @else
						    <ul style="list-style: none;">
						    	<li>
						    		<label>{{$ex4->file}}</label>
						    		<hr>
						    		<a href="{{route('downloadfile', $ex4->id)}}" class="btn btn-primary">Download Bài tập</a>
						    	</li>
						    </ul>
						    @endif
						    <hr>

						</div>
				    </div>
                </div>
                <!-- /.row -->
            </div>
            <hr>
            <!-- /.container-fluid -->
        </div>
@endsection