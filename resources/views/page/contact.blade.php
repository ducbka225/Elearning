@extends('master')
@section('content')
		<hr>
	<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">		
				<div class="contact-outer">
				<div class="col-xs-12 col-sm-8 col-md-8">
					<div class="our-course">
						
						<form name="ajax-form" id="" action="contact" method="post" class="contact-form">
							{!!csrf_field()!!}
							<input name="_redirect" id="name2" value="contact.html" type="hidden">
							<div class="col-sm-12 col-md-12"><h2>Phản Hồi</h2></div>
							@if(Session::has('message'))
			                <div class="alert alert-success">{{Session::get('message')}}</div>
			            	@endif
							<div class="col-sm-12 col-md-12">
								<input id="name" name="name" required="" placeholder="Name" type="text">
							</div>
							<div class="col-sm-12 col-md-12">
								<input id="email" name="email" required="" placeholder="Your Email" type="email">
							</div>
							<div class="col-sm-12 col-md-12">
								<input id="phone" name="phone" required="" placeholder="Phone" type="text">
							</div>
							<div class="col-md-12">
								<textarea id="content" name="content" cols="45" rows="5" placeholder="Type your message here..." aria-required="true"></textarea>
							</div>
							<div class="col-sm-12 col-md-12 text-center">
								<input name="submit" value="Submit" id="send" type="submit">
							</div>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="contact-info">
					<h2>Liên Hệ với chúng tôi</h2>
					<ul>
                     <li>
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="ftext">Số 1 - đại cồ việt
                        </div>
                     </li>                     
                     <li>
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="ftext">contact@gmail.com</div>
                     </li>
					<li>
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="ftext">+969696969</div>
                     </li>
                  </ul>
					</div>				 	
				</div>
				</div>	
			</div>
		</div>
		<!-- /.courses -->
	</section>
@endsection