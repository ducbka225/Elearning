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
			  	<h3>câu {{$number_question}}/{{$count}}:</h3>
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
							        <form action="{{route('postex3', $ex3->id)}}" enctype="multipart/form-data" method="post">
			          			 	{!!csrf_field()!!}
				          			<p>
				          				{{$ex3->Content}}
				          			</p>
									
									@if($join_table == null) 
									<textarea name="answer" style="width: 300px"></textarea>
									<br>
									<button class="btn-success" type="submit">Submit</button>
									@else
										@if($check == 1)
											<a href="ex3byid/{{$id_ex3}}/{{$number_question}}/{{$count}}"><button class="btn-success" type="button"> Next ❯</button>
											</a>
										@else
										<a href="index"><button class="btn-success" type="button"> Finish ❯</button>
										</a>
										@endif
									@endif
	      					     	</form>	   
								</td>
								<td>
									@if($join_table != null)
									<p>{{$join_table->answer}}</p> 
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