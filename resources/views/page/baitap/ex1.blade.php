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
			  
			    <h3>Trả lời từ câu 1 -> 3:</h3>
			    <p id="qtext">Nghe và trả lời câu hỏi?</p>
			      <div style="position:relative;width:100%;">
			        <div id="altcontainer">
			          <ul style="list-style-type: none;">
			          	@foreach($ex1 as $x)
			          	<li>
			          		<div>
		          			 <form role="form" id="quizform" name="quizform" action="" method="post">
			          			<audio controls>
								  <source src="source/assets/audio/{{$x->file}}" type="audio/mpeg">
								</audio>
								<input type="file" name="filename" value="upload"> 
								<button class="btn-success" type="submit">Submit ❯</button>
			          		</div>
      					     </form>	          						
						</li>
						<hr size="50px" style="color: red"/>
						@endforeach					
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