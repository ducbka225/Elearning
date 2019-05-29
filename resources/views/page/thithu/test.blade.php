@extends('master')
@section('content')
<hr>
<div class="container">
	<div class="col-md-12">                                            
        <h3 class="page-title">Bài kiểm tra năng lực</h3>
       <h4> Time <span id="time" style="color:#FF0000">60:00</span> minutes!</h4>
        <form method="POST" action="/post-test" accept-charset="UTF-8">
            {!!csrf_field()!!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trả lời 20 câu hỏi. Thời gian làm bài 60 phút. 
                </div>
                            
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <?php $i = 1; ?>
                            @foreach($test as $t)
                                <div class="form-group">
                                    <strong>Question {{ $i }}.</strong>

                                    <div class="code_snippet">{{$t->content}} ?</div>
                                    
                                    <input
                                        type="hidden"
                                        name="questions[{{ $i }}]"
                                        value="{{ $t->id }}">
                                    <label class="radio-inline">
                                        <input type="radio" name="answerss[{{ $t->id }}]" value="1">
                                        A. {{ $t->a }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answerss[{{ $t->id }}]" value="2">
                                       B. {{ $t->b }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answerss[{{ $t->id }}]" value="3">
                                        C. {{ $t->c }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answerss[{{ $t->id }}]" value="4">
                                        D. {{ $t->d }}
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
            <div class="showtime">
                <input type="text" readonly="" id="timespent" value="0:00">
            </div>
            <hr/>
        </form>

    </div>
</div> 
<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 60,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
<style type="text/css">
    div .code_snippet{
        margin: 15px 0 5px 0;
        padding: 7px;
        font-family: "Courier New";
        border: 1px dashed #CCC;
        background-color: #F7F7F7;
        white-space: pre;
    }

    .showtime {
    position: relative;
    }

    .showtime #timespent {
        position: fixed;
        right: 50px;
        bottom: 10px;
        position:fixed;
          font-family: "Segoe UI",Arial,sans-serif;
          font-size:16px;
          width:80px;
    }
</style>


@endsection
