@extends('master')
@section('content')
<div class="col-md-12">

                                                
    <h3 class="page-title">My Results</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            View result        
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        	<tr>
	                            <th>User</th>
	                            <td>{{Auth::User()->name}}</td>
                        	</tr>
                            <tr>
	                            <th>Date</th>
	                            <td>{{$end_test_result->created_at}}</td>
                   		 	</tr>
	                        <tr>
	                            <th>Score</th>
	                            <td>{{$counttrue}}/{{$countquestion}}</td>
	                        </tr>
                		</tbody>
                	</table>
                                                    
                    <table class="table table-bordered table-striped">
                    	<?php $i = 1; ?>
                        @foreach($result as $et)
                        <tbody>
                        	<tr class="test-option-false">
	                            <th style="width: 10%">Question {{ $i }}.</th>
	                            <th>{{$et->content}} ?</th>
                        	</tr>
                            <!-- <tr>
                                <td>Code snippet</td>
                                <td><div class="code_snippet">ads</div></td>
                            </tr> -->
                            <tr>
	                            <td>Đáp án</td>
	                            <td>
                                	<ul>
                                		@if($et->keychoose == 1 && $et->keychoose == $et->keytrue )
                                        <li style="font-weight: bold; text-decoration: underline; color: green">{{$et->keya}}
                                         	<em>(correct answer)</em>
                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="">{{$et->keyc}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 1 && $et->keychoose != $et->keytrue )

                                     	<li style=" font-weight: bold; color: red">{{$et->keya}}

                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="">{{$et->keyc}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 2 && $et->keychoose == $et->keytrue )
                                        <li >{{$et->keya}}
                                         	
                                     	</li>
	                                    <li style="font-weight: bold; text-decoration: underline; color: green">{{$et->keyb}}<em>(correct answer)</em>
                                     	<li style="">{{$et->keyc}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 2 && $et->keychoose != $et->keytrue )

                                     	<li style="">{{$et->keya}}

                                     	</li>
	                                    <li style=" font-weight: bold; color: red">{{$et->keyb}}
                                     	<li style="">{{$et->keyc}}
	                
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 3 && $et->keychoose == $et->keytrue )
                                        <li style="">{{$et->keya}}
                                         	
                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="font-weight: bold; text-decoration: underline; color: green">{{$et->keyc}}<em>(correct answer)</em>
	                                  
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 3 && $et->keychoose != $et->keytrue )

                                     	<li style=" ">{{$et->keya}}

                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="font-weight: bold; color: red">{{$et->keyc}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$et->keyd}}

                                     	@elseif($et->keychoose == 4 && $et->keychoose == $et->keytrue )
                                        <li style="">{{$et->keya}}
                                         	
                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="">{{$et->keyc}}
	                                     	
                                     	</li>
                                     	<li style="font-weight: bold; text-decoration: underline; color: green">{{$et->keyd}}<em>(your answer)</em>

                                     	@elseif($et->keychoose == 4 && $et->keychoose != $et->keytrue )

                                     	<li style=" ">{{$et->keya}}

                                     	</li>
	                                    <li style="">{{$et->keyb}}
                                     	<li style="">{{$et->keyc}}
	                                     	
                                     	</li>
                                     	<li style="font-weight: bold; color: red">{{$et->keyd}}<em>(your answer)</em>
                                     	@endif
                                    </ul>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>Answer Explanation</td>
                            <td> ád<br><br>
                            	Read more:
                            	<a href="ád" target="_blank">ád</a>
                            </td>
                        </tr> -->
	                    </tbody>
	                    <?php $i++; ?>
                        @endforeach
	                </table>
            	</div>
            </div>

            <p>&nbsp;</p>

            <a href="/index" class="btn btn-default"> << Back to home</a>
           <!--  <a href="http://127.0.0.1:8000/results" class="btn btn-default">See all my results</a> -->
        </div>
    </div>

    </div>
@endsection