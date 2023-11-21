<!DOCTYPE html>
<html lang="zh-tw">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	<script src="../utils/jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="../style/style.css" />
	<title>Document</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg text-white container-nav navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand logo ms-3" href="index.html">APEX</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon navbar-light"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-margin">
					<li class="nav-item ms-5">
						<a class="nav-link" href="about.html">ABOUT</a>
					</li>
					<li class="nav-item dropdown ms-5">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							SHOP
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li>
								<a class="dropdown-item" href="#">Something else here</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown ms-5">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							COSTUMIZE
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li>
								<a class="dropdown-item" href="#">Some thing else here</a>
							</li>
						</ul>
					</li>
					<li class="nav-item ms-5">
						<a class="nav-link" href="#">TEAM</a>
					</li>
					<li class="nav-item ms-5">
						<a class="nav-link" href="#">CONNECT</a>
					</li>
				</ul>
				<form class="d-flex search">
					<input class="form-control search-input" type="search" placeholder="SEARCH" aria-label="Search" />
					<div>
						<i class="bi bi-search search-position" type="button"></i>
					</div>
					<!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
				</form>
				<a href="" type="button" class="shop"><i class="bi bi-cart2 icons"></i></a>
				<a href="" type="button" class="member"><i class="bi bi-person icon"></i></a>
			</div>
		</div>
	</nav>
	<!-- Path: layout/navbar.html -->