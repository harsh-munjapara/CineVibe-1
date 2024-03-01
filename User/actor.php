<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/splide.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>CineVibe – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>
	<!-- header -->
	<?php include("navbar.php"); ?>  
	<!-- end header -->

	<!-- mobile menu -->
	<div class="menu">
		<!-- menu search -->
		<form action="#" class="menu__search">
			<input type="text" placeholder="Search">
			<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
		</form>
		<!-- end menu search -->

		<!-- menu nav -->
		<ul class="menu__nav">
			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="index.php">Home style 1</a></li>
					<!-- <li><a href="index2.php">Home style 2</a></li> -->style="color: #cd6bf7; ">VIBE</span></p>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="catalog1.php">Catalog Grid</a></li>
					<li><a href="catalog2.php">Catalog List</a></li>
					<li><a href="details1.php">Details Movie</a></li>
					<li><a href="details2.php">Details TV Series</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<li class="menu__nav-item">
				<a href="pricing.php" class="menu__nav-link">Pricing plans</a>
			</li>

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="about.php">About us</a></li>
					<li><a href="faq.php">Help center</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="actor.php">Actor</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="privacy.php">Privacy policy</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link menu__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>
				</a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="signin.php">Sign In</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="forgot.php">Forgot password</a></li>
					<li><a href="404.php">404 Page</a></li>
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end menu nav -->
	</div>
	<!-- end mobile menu -->

	<!-- details -->
	<section class="section section--details">
		<!-- details background -->
		<div class="section__details-bg" data-bg="img/bg/actor__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title section__title--head">Michelle Rodriguez</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="item item--details">
						<!-- card cover -->
						<div class="item__cover">
							<img src="img/covers/actor.jpg" alt="">
						</div>
						<!-- end card cover -->

						<!-- card content -->
						<div class="item__content">
							<ul class="item__meta item__meta--first">
								<li><span>Career:</span> Actress</li>
								<li><span>Height:</span> 1.65 m</li>
								<li><span>Date of birth:</span> July 12, 1978</li>
								<li><span>Place of birth:</span> San Antonio, Texas, United States</li>
								<li><span>Age:</span> 44</li>
								<li><span>Zodiac:</span> Cancer</li>
								<li><span>Genres:</span> <a href="#">Action</a> <a href="#">Triler</a> <a href="#">Drama</a></li>
								<li><span>Total number of movies:</span> 109</li>
								<li><span>First movie:</span> <a href="details1.php">Girl Fight (2000)</a></li>
								<li><span>Last movie:</span> <a href="details1.php">Fast and the Furious 10 (2023)</a></li>
								<li><span>Best movie:</span> <a href="details1.php">Avatar</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end content -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Discover</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Filmography</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Photos</button>
							</li>
						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/7.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">The Lost Key</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/8.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Red Sky at Night</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/9.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">The Forgotten Road</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/10.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Dark Horizons</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/11.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Echoes of Yesterday</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/12.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Into the Unknown</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/13.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">The Broken Path</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/14.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">A Light in the Darkness</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/15.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Endless Horizon</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/16.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">The Unseen Journey</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/17.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Reckoning</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.php" class="item__cover">
									<img src="img/covers/18.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.php">Savage Beauty</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>

					<div class="row">
						<!-- paginator -->
						<div class="col-12">
							<div class="section__paginator">
								<!-- amount -->
								<span class="section__paginator-pages">Showing 12 of 109</span>
								<!-- end amount -->

								<ul class="section__paginator-list">
									<li>
										<a href="#">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg>
											<span>Prev</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>Next</span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg>
										</a>
									</li>
								</ul>

								<ul class="paginator">
									<li class="paginator__item paginator__item--prev">
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z"/></svg></a>
									</li>
									<li class="paginator__item"><a href="#">1</a></li>
									<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li>
									<li class="paginator__item"><a href="#">4</a></li>
									<li class="paginator__item"><span>...</span></li>
									<li class="paginator__item"><a href="#">9</a></li>
									<li class="paginator__item"><a href="#">10</a></li>
									<li class="paginator__item paginator__item--next">
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z"/></svg></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
					<!-- project gallery -->
					<div class="gallery" itemscope>
						<div class="row row--grid">
							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-1.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-1.jpg" itemprop="thumbnail" alt="Image description 1" />
								</a>
								<figcaption itemprop="caption description">Some image caption 1</figcaption>
							</figure>
							<!-- end gallery item -->

							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-2.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-2.jpg" itemprop="thumbnail" alt="Image description 2" />
								</a>
								<figcaption itemprop="caption description">Some image caption 2</figcaption>
							</figure>
							<!-- end gallery item -->

							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-3.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-3.jpg" itemprop="thumbnail" alt="Image description 3" />
								</a>
								<figcaption itemprop="caption description">Some image caption 3</figcaption>
							</figure>
							<!-- end gallery item -->

							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-4.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-4.jpg" itemprop="thumbnail" alt="Image description 4" />
								</a>
								<figcaption itemprop="caption description">Some image caption 4</figcaption>
							</figure>
							<!-- end gallery item -->

							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-5.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-5.jpg" itemprop="thumbnail" alt="Image description 5" />
								</a>
								<figcaption itemprop="caption description">Some image caption 5</figcaption>
							</figure>
							<!-- end gallery item -->

							<!-- gallery item -->
							<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
								<a href="img/gallery/project-6.jpg" itemprop="contentUrl" data-size="1920x1280">
									<img src="img/gallery/project-6.jpg" itemprop="thumbnail" alt="Image description 6" />
								</a>
								<figcaption itemprop="caption description">Some image caption 6</figcaption>
							</figure>
							<!-- end gallery item -->
						</div>
					</div>
					<!-- end project gallery -->
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- end footer -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from CineVibe.volkovdesign.com/main/actor.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Feb 2024 13:27:59 GMT -->
</html>