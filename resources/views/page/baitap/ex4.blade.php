@extends('master')
@section('content')
<!-- header-title -->
<div class="header-title">
	<h1>Ex1</h1>
</div>
<!-- /header-title -->	
<div class="container">
	<div class="row">		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div id="quizmain">
			  <div id="quizcontainer">
			  
			    <h3>Trả lời các câu hỏi trong file</h3>
			   <!--  <p id="qtext">Nghe và trả lời câu hỏi?</p> -->
			      <div style="position:relative;width:100%;">
			        <div id="altcontainer">
			          <ul style="list-style-type: none;">
			          	<hr>
			          	<li>
			          		<div>
		          			 <form role="form" action="{{route('postex4', $ex4->id)}}" method="post" enctype="multipart/form-data">
		          			 	{!!csrf_field()!!}
		          			 	<a href="{{route('downloadfile', $ex4->id)}}" class="btn btn-primary">Download Bài tập</a>
		          			 	<hr>
			          			
			          			@if($join_table == null)
			          			Nộp bài tập:
								<input type="file" name="filename" value="upload"> 
								<button class="btn-success" type="submit">Submit ❯</button>
								@else
								
								<p>Bạn đã nộp bài tập	</p>
								
								@endif
			          		
      					     </form>
      					     </div>	          						
						</li>
						<hr size="50px" style="color: red"/>			
			          </ul>
			        </div>
			      </div>
			    <hr>
			  </div>
			</div>
		</div>				
	</div>
</div>
@endsection