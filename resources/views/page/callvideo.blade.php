
@extends('master')
@section('content')
        <style type="text/css">
            #ulUser li{
                
                padding: 10px 10px;
                color: green;
                /*list-style-type: none;*/
                font-size: 18px;

            }
            
            border-radius: 4px;
        </style>
        
        <div id="div-dang-ky" style="padding-left: 500px">
            @if(Auth::check())
            <input type="hidden" id="txtUserName" value="{{Auth::user()->name}}" >
            @endif
            <button class = "btn btn-info btn-lg" id="btnSignUp">Connect</button>
            <a href="/index"><button class="btn btn-danger btn-lg">Back to Home</button></a>
        </div>

        <body>
        <div id="div-chat" style="padding: 50px">
            <h1 style="color: Red">Online User</h1>
            <ul id="ulUser" style="width: 300px;background-color: wheat;">
                
            </ul>

            <h3 id="my-peer">Your Id:</h3>
            <video id="localStream" width="80%" height="400px" controls></video>
            <br /><br />
            <video id="remoteStream" width="300" controls></video>
            <br /><br />
            <a href="/index"><button class="btn btn-danger btn-lg">Back to Home</button></a>
        </div>
        

        <br /><br>

@endsection    
