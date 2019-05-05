@extends('master')
@section('content')
	<div class="col-md-12">                                            
        <h3 class="page-title">Bài kiểm tra giữa kỳ - {{$course->title}}</h3>
        <form method="POST" action="/post-mid-test" accept-charset="UTF-8">
            {!!csrf_field()!!}
            <input type="hidden" name="course" value="{{$course->id}}">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trả lời {{$countquestion}} câu hỏi. Không giới hạn thời gian. 
                </div>
                            
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <?php $i = 1; ?>
                            @foreach($mid_test as $mt)
                                <div class="form-group">
                                    <strong>Question {{ $i }}.</strong>

                                    <div class="code_snippet">{{$mt->content}} ?</div>
                                    
                                    <input
                                        type="hidden"
                                        name="questions[{{ $i }}]"
                                        value="{{ $mt->id }}">
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $mt->id }}]" value="1">
                                        A. {{ $mt->keya }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $mt->id }}]" value="2">
                                       B. {{ $mt->keyb }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $mt->id }}]" value="3">
                                        C. {{ $mt->keyc }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $mt->id }}]" value="4">
                                        D. {{ $mt->keyd }}
                                    </label>
                                    <br>
                                   
                                </div>
                            <?php $i++; ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <input class="btn btn-danger" type="submit" value="Submit answers">
            <hr/>
        </form>

    </div>
<style type="text/css">
    div .code_snippet{
        margin: 15px 0 5px 0;
        padding: 7px;
        font-family: "Courier New";
        border: 1px dashed #CCC;
        background-color: #F7F7F7;
        white-space: pre;
    }
</style>
@endsection