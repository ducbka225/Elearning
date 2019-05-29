@extends('master')
@section('content')
<div class="header-title">
	<h1>Giáo Viên</h1>
</div>
<section class="courses">
		<!-- .courses -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<!-- .teacher-outer -->
					@foreach($teacher as $t)
					<div class="teacher-outer">
						<div class="teacher-img">
							<img src="source/assets/img/{{$t->avatar}}" >
						</div>
						<div class="teacher-text">
							<a href="/teacher_profile/{{$t->id}}">
								<h4>{{$t->name}}</h4>
								<span>{{$t->exp}}</span>
						 	</a>
							<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
						</div>
					</div>
					@endforeach
					<!-- /.teacher-outer -->
				<!-- .pagination -->
				<div class="text-center col-md-12">
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<!-- /.pagination -->
			</div>
		</div>
		<!-- /.courses -->
	</section>

@endsection