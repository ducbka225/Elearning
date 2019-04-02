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
			  
			    <h3>Trả lời từ câu 1 -> {{$count_question}}:</h3>
			    <p id="qtext">Nghe và trả lời câu hỏi?</p>
			      <div style="position:relative;width:100%;">
			        <div id="altcontainer">
			        	<div class="col-md-10">
			        		<table class="table">
						    <thead>
						      <tr>
						        <th>Question {{$number_question}}</th>
						        <th>Answer</th>					        
						      </tr>
						    </thead>
						    <tbody>
					        <tr>
					        	<td>
							        <form action="{{route('postex1', $ex1->id)}}" enctype="multipart/form-data" method="post">
			          			 	{!!csrf_field()!!}
				          			<audio controls>
									  <source src="source/assets/audio/{{$ex1->file}}" type="audio/mpeg">
									</audio>
									<input type="file" name="filename" value="upload">
									<br>
									@if($join_table == null) 
									<button class="btn-success" type="submit">Submit</button>
									@else
									<a href="ex1byid/{{$id_ex1}}/{{$number_question}}/{{$count_question}}"><button class="btn-success" type="button"> Next ❯</button>
									</a>
									@endif
	      					     	</form>	   
								</td>
								<td>
									@if($join_table != null)
									<audio controls>
									  <source src="source/assets/audio/{{$join_table->answer}}" type="audio/mpeg">
									</audio>
									@endif
								</td>
					        </tr>		
						    </tbody>
						  </table>
			        	</div>			           
			        </div>
			      </div>
			    <hr>
			  </div>
			</div>
		</div>				
	</div>
</div>
@endsection