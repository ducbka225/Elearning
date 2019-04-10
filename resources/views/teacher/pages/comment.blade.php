@extends('teacher.master')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bình Luận
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <div class="row row-no-gutters">
					    <div class="col-lg-12" style="background-color:lavender;">
					    	<br>
						    @if(Session::has('message'))
				            <div class="alert alert-success">{{Session::get('message')}}</div>
				            @endif
						    <ul style="list-style: none;">
						    	<?php $tt = 0; ?>
						    	@foreach($comment as $c)
						    	<li>
						    		<div class="comment-text1">
										<!-- <img src="source/assets/img/{{$c->user->avatar}}" alt="comment" width="50px" height="50px"> -->
										<div class="text">
											<strong>{{$c->user->name}}</strong> <small>{{$c->created_at}}</small>
											<p>{{$c->content}}</p>	
										</div>
									</div>
									<div style="margin-left: 40px; ">
										Re: <p style="color: blue"></p>					
									</div>

									<div id="frecomment" style="margin-left: 20px; margin: center">
										<form  method="POST" action="/teacher/comment/{{$c->id}}">
											{!!csrf_field()!!}
											<textarea rows="3" name="content"  style="width: 100%"></textarea>
											<button type="submit" class="btn btn-success" >
											Trả Lời</button>
											
											<button  class="btn btn-danger" ><a href="/teacher/xoacomment/{{$c->id}}" style="color: white">Xóa</a>
											</button>
										</form>	
									</div>							
						    	</li>
						    	<br>
						    	@endforeach

						    </ul>
						    <button class="btn btn-primary btnBack" onclick="window.history.back();" > << Back </button>
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