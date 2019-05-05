<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zcube.in/elearning/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 15:58:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf_token" content="{{ csrf_token() }}" />
	<title>E-Learning</title>
	<base href="{{asset('')}}">
	<!-- Standard -->
	<link rel="shortcut icon" href="source/assets/img/ficon.png">

	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="source/assets/css/bootstrap.min.css" type="text/css">
	<!-- Dropdownhover CSS -->
	<link rel="stylesheet" href="source/assets/css/bootstrap-dropdownhover.min.css" type="text/css">
	<!-- fonts awesome -->
	<link rel="stylesheet" href="source/assets/font/css/font-awesome.min.css" type="text/css">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="source/assets/css/animate.min.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="source/assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="source/assets/css/custom.css" type="text/css">
	<link rel="stylesheet" href="source/assets/css/w3.css" type="text/css">
	<!-- Owl Carousel Assets -->
	<link href="source/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="source/assets/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="loading">
		</div>
	</div>

	@include('header')
	@yield('content')


	<!-- START FOOTER SECTION -->
	@include('footer')
	<!-- jQuery -->
	<script src="source/assets/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="source/assets/js/bootstrap.min.js"></script>
	<script src="source/assets/js/bootstrap-dropdownhover.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="source/assets/js/jquery.easing.min.js"></script>
	<script src="source/assets/js/jquery.fittext.js"></script>
	<script src="source/assets/js/wow.min.js"></script>
	<script src="source/assets/js/modernizr.html"></script>
	<!-- Modernizr -->
	<script src="source/assets/js/main.html"></script>
	<!-- Resource jQuery -->
	<!--  countTo JavaScript  -->
	<script type="text/javascript" src="source/assets/js/jquery.countTo.js"></script>
	<!-- owl carousel -->
	<script src="source/assets/owl-carousel/owl.carousel.js"></script>
	<!--  Custom Theme JavaScript  -->
	<script src="source/assets/js/custom.js"></script>
</body>


<!-- Mirrored from zcube.in/elearning/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 15:58:29 GMT -->
