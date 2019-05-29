@extends('master')
@section('content')
<hr>
<div class="container">
      <h3> Danh sách khóa học bạn tìm</h3>
    <div class="row mx-m-25">
          
          	@foreach($course as $c)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="viewed-courses-box">
                            <div class="viewed-courses-img">
                                <img src="source/assets/img/{{$c->course_avatar}}" height="170px" alt="">
                            </div>
                            <div class="viewed-courses-text">
                                <a href="{{route('chitiet', $c->id)}}">
                                    <h6>{{$c->title}}</h6>
                                </a>
                                <p>By : {{$c->teacher->name}}</p>
                                <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    {{$c->price}} <span>$300</span>
                                </div>
                                <a href="{{route('chitiet', $c->id)}}" class="ank5">Đăng Ký Học</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div><!-- .col -->
    </div><!-- .container -->

@endsection