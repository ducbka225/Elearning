<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Elearning WebRTC</title>
        <script src="source/CallVideo/jquery.js"></script>
        <script src="source/CallVideo/peer.js"></script>
        <script src="source/CallVideo/peer.min.js"></script>
        <script src="source/CallVideo/socket.io.js"></script>
        <link rel="stylesheet" href="source/assets/css/bootstrap.min.css" type="text/css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        
    </head>
    <body> -->
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
        <!-- <div id="div-chat" style="padding: 50px">
            <h1 style="color: Red">Online User</h1>
            <ul id="ulUser">
                
            </ul>

            <h3 id="my-peer">Your Id:</h3>
            <br><br>
            <video id="remoteStream" width="300" controls></video>

            <video id="localStream" width="300" controls ></video>
            <br /><br />
      
            
            <input type="text" id="remoteId" placeholder="remote id" >
            <button id="btnCall">Call</button>
        </div> -->
        
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
            <!-- <input type="text" id="remoteId" placeholder="remote id" >
            <button id="btnCall">Call</button> -->
            <a href="/index"><button class="btn btn-danger btn-lg">Back to Home</button></a>
        </div>
        

        <br /><br>
        <!-- <div id="div-dang-ky" style="padding-left: 500px">
            <input type="text" id="txtUserName" placeholder="Enter your UserName"  style="height: 30px">
            <button class = "btn btn-info" id="btnSignUp">Tham Gia</button>
            <button class = "btn btn-success"><a href="/index" style="color: white"> << Back to Home</a></button>
        </div> -->

@endsection    
    <!-- </body>
        
    </body>
    <script src="source/CallVideo/main.js"></script>
</html> -->
