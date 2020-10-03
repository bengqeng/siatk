<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<title>BIT IND · Bootstrap</title>


	<style>
		.navbar.scrolled {
			background-color: #fff !important;
			color: black;
			transition: background-color 200ms linear;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

</head>

<body>

	<!-- Image and text -->
	<div class="container">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent">
			<a class="navbar-brand mb-0 h1" href="#">
				<img src="<?= base_url('asset/img/logo/') ?>bit-logo.png" width="36" height="36" class="d-inline-block align-top" alt="">
				BIT-IND
			</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>


	<div class="container-fluid px-0">
		<div id="carouselExampleControls reposition-top" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner bg-info" role="listbox">
				<div class="carousel-item active">
					<div class="d-flex align-items-center justify-content-center min-vh-100">
						<h1 class="display-1">ONE</h1>
					</div>
				</div>
				<div class="carousel-item">
					<div class="d-flex align-items-center justify-content-center min-vh-100">
						<h1 class="display-1">TWO</h1>
					</div>
				</div>
				<div class="carousel-item">
					<div class="d-flex align-items-center justify-content-center min-vh-100">
						<h1 class="display-1">THREE</h1>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container">

		<div class="row justify-content-center pt-4 my-md-5 pt-md-5">
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>


		</div>

		<div class="row justify-content-center pt-4 my-md-5 pt-md-5 border-top">
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>
			<div class="card" style="width: 22rem; padding:2px;">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
				</svg>
				<div class="card-body">
					<p class="card-text">Some quick</p>
				</div>
			</div>


		</div>

		<footer class="pt-4 my-md-5 pt-md-5  border-top">
			<div class="row justify-content-center">
				<!-- <div class="col-12 col-md">
					<img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
					<small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
				</div> -->
				<div class="col-4 col-md">
					<h5>Features</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Cool stuff</a></li>
						<li><a class="text-muted" href="#">Random feature</a></li>
						<li><a class="text-muted" href="#">Team feature</a></li>
						<li><a class="text-muted" href="#">Stuff for developers</a></li>
						<li><a class="text-muted" href="#">Another one</a></li>
						<li><a class="text-muted" href="#">Last time</a></li>
					</ul>
				</div>
				<div class="col-4 col-md">
					<h5>Resources</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Resource</a></li>
						<li><a class="text-muted" href="#">Resource name</a></li>
						<li><a class="text-muted" href="#">Another resource</a></li>
						<li><a class="text-muted" href="#">Final resource</a></li>
					</ul>
				</div>
				<div class="col-4 col-md">
					<h5>About</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Team</a></li>
						<li><a class="text-muted" href="#">Locations</a></li>
						<li><a class="text-muted" href="#">Privacy</a></li>
						<li><a class="text-muted" href="#">Terms</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>



	<script>
		$(document).ready(function() {

			$(document).scroll(function() {

				var $nav = $(".navbar");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
				// var a = $('.navbar').text();
				// $(".navbar").removeClass("bg-transparent");
				// $(".navbar").addClass("bg-white");
				// console.log(a);
			});
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>