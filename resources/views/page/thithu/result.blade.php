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
	                            <th>Score</th>
	                            <td>{{$counttrue}}</td>
	                        </tr>
                		</tbody>
                	</table>
                                                    
                    <table class="table table-bordered table-striped">
                    	<?php $i = 1; ?>
                        @foreach($result as $t)
                        <tbody>
                        	<tr class="test-option-false">
	                            <th style="width: 10%">Question {{ $i }}.</th>
	                            <th>{{$t->content}} ?</th>
                        	</tr>
                            <!-- <tr>
                                <td>Code snippet</td>
                                <td><div class="code_snippet">ads</div></td>
                            </tr> -->
                            <tr>
	                            <td>Đáp án</td>
	                            <td>
                                	<ul>
                                		@if($t->answer == 1 && $t->answer == $t->true )
                                        <li style="font-weight: bold; text-decoration: underline; color: green">{{$t->a}}
                                         	<em>(correct answer)</em>
                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="">{{$t->c}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 1 && $t->answer != $t->true )

                                     	<li style=" font-weight: bold; color: red">{{$t->a}}

                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="">{{$t->c}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 2 && $t->answer == $t->true )
                                        <li >{{$t->a}}
                                         	
                                     	</li>
	                                    <li style="font-weight: bold; text-decoration: underline; color: green">{{$t->b}}<em>(correct answer)</em>
                                     	<li style="">{{$t->c}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 2 && $t->answer != $t->true )

                                     	<li style="">{{$t->a}}

                                     	</li>
	                                    <li style=" font-weight: bold; color: red">{{$t->b}}
                                     	<li style="">{{$t->c}}
	                
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 3 && $t->answer == $t->true )
                                        <li style="">{{$t->a}}
                                         	
                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="font-weight: bold; text-decoration: underline; color: green">{{$t->c}}<em>(correct answer)</em>
	                                  
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 3 && $t->answer != $t->true )

                                     	<li style=" ">{{$t->a}}

                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="font-weight: bold; color: red">{{$t->c}}
	                                     	<em>(your answer)</em>
                                     	</li>
                                     	<li style="">{{$t->d}}

                                     	@elseif($t->answer == 4 && $t->answer == $t->true )
                                        <li style="">{{$t->a}}
                                         	
                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="">{{$t->c}}
	                                     	
                                     	</li>
                                     	<li style="font-weight: bold; text-decoration: underline; color: green">{{$t->d}}<em>(your answer)</em>

                                     	@elseif($t->answer == 4 && $t->answer != $t->true )

                                     	<li style=" ">{{$t->a}}

                                     	</li>
	                                    <li style="">{{$t->b}}
                                     	<li style="">{{$t->c}}
	                                     	
                                     	</li>
                                     	<li style="font-weight: bold; color: red">{{$t->d}}<em>(your answer)</em>
                                     	@endif
                                    </ul>
                            </td>
                        </tr>
	                    </tbody>
	                    <?php $i++; ?>
                        @endforeach
	                </table>
            	</div>
            </div>

            <p>&nbsp;</p>

            <a href="index" class="btn btn-default"> << Back to home</a>
        </div>
    </div>

    </div>
@endsection