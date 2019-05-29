@extends('master')
@section('content')
	<div class="col-md-12">                                            
        <h3 class="page-title">Bài kiểm tra cuối kỳ - {{$course->title}}</h3>
        <form method="POST" action="/post-end-test" accept-charset="UTF-8">
            {!!csrf_field()!!}
            <input type="hidden" name="course" value="{{$course->id}}">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trả lời {{$countquestion}} câu hỏi. Thời gian làm bài 60 phút. 
                </div>
                            
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <?php $i = 1; ?>
                            @foreach($end_test as $et)
                                <div class="form-group">
                                    <strong>Question {{ $i }}.</strong>

                                    <div class="code_snippet">{{$et->content}} ?</div>
                                    
                                    <input
                                        type="hidden"
                                        name="questions[{{ $i }}]"
                                        value="{{ $et->id }}">
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $et->id }}]" value="1">
                                        A. {{ $et->keya }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $et->id }}]" value="2">
                                       B. {{ $et->keyb }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $et->id }}]" value="3">
                                        C. {{ $et->keyc }}
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="answers[{{ $et->id }}]" value="4">
                                        D. {{ $et->keyd }}
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
<script type="text/javascript">
    function startTimer() {
      var tobj = document.getElementById("timespent")
      var t = "0:00";
      var s = 00;
      var d = new Date();
      var timeint = setInterval(function () {
        s += 1;
        d.setMinutes("0");
        d.setSeconds(s);
        min = d.getMinutes();
        sec = d.getSeconds();
        if (sec < 10) sec = "0" + sec;
        document.getElementById("timespent").value = min + ":" + sec;
      }, 1000);
      tobj.value = t;
    }
</script>

@endsection
