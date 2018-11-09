<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/landingPage.css">
    <link rel="stylesheet" type="" href="../fontawesome-free-5.3.1-web/css/all.css">

    <title>HYPERDEV</title>

</head>
<body>

	<!---Navigations tabs--->

	<header>
		<nav class="navbar navbar-expand-md navbar-inverse navbar-light fixed-top" id="myNavBar">
		<a class="navbar-brand" href="" id="navbar-brand"><img src="../resources/img/HyperDevVectFin.png" width="70" height="70" class="d-inline-b"> HyperDev</a>
		<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarLink">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarLink">
			<ul class="navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link text" href="#presentation">HOME</a></li>
				<li class="nav-item"><a class="nav-link" href="#services">ABOUT</a></li>
				<li class="nav-item"><a class="nav-link" href="#values">PORTFOLIO</a></li>
				<li class="nav-item"><a class="nav-link" href="">CONTACT</a></li>
				<div class="dropdown" id="Langage">
					<li class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a  href="">LANGAGE</a>
					</li>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">English</a>
					    <a class="dropdown-item" href="#">French</a>
					</div>
				</div>
			</ul>
		</div>
		</nav>
	</header>

	<!---Get started--->

	<section class="intro">
		<div class="inner_1">
			<div class="content_1">
					<h1>HyperDev</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		<div class="inner">
			<div class="content">
				<a class="btn_started" href="#">Read More</a>
				<a class = "btn_Sign "href="#">Sign in</a>
			</div>
		</div>
	</section>

	<!---Presentation of HyperDev--->
	
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bootstrap-4.1.3-dist/js/jquery-3.3.1.slim.min.js"></script>
<script src="../bootstrap-4.1.3-dist/js/popper.min.js"></script>
<script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>