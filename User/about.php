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

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/bg/section__bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">About Us</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">About us</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- about -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title"><b>CineVibe</b> – Best Place for Entertainment</h2>

					<p class="section__text">Welcome to <b>CineVibe</b> Content site, the ultimate destination for all film enthusiasts. Immerse yourself in a world of captivating stories, stunning visuals, and unforgettable performances. Explore our extensive library of Content, spanning across genres, eras, and cultures.</p>

					<p class="section__text">Indulge in the joy of cinema with our curated collections, featuring handpicked movies grouped by themes, directors, or actors. Dive into the world of cinematic magic and let yourself be transported to new realms of imagination and emotion.</p>
				</div>
				<!-- end section title -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H7.64l-.58,1a2,2,0,0,0,0,2,2,2,0,0,0,1.75,1h6.46A2,2,0,0,0,17,21a2,2,0,0,0,0-2l-.59-1H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM8.77,20,10,18H14l1.2,2ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14H20Zm0-3H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>
						</span>
						<h3 class="feature__title">Ultra HD</h3>
						<p class="feature__text">Experience movies like never before with our Ultra HD feature. Immerse yourself in stunning visuals, vibrant colors, and crystal-clear detail.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"/></svg>
						</span>
						<h3 class="feature__title">Large movie database</h3>
						<p class="feature__text">Discover a vast and diverse collection of movies in our extensive database. With thousands of titles to choose from, you'll never run out of options.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18,6H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42L12,5.54l-1.17-2a1,1,0,1,0-1.74,1L10,6H6A3,3,0,0,0,3,9v8a3,3,0,0,0,3,3v1a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V20a3,3,0,0,0,3-3V9A3,3,0,0,0,18,6Zm1,11a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8H18a1,1,0,0,1,1,1Z"></path></svg>
						</span>
						<h3 class="feature__title">Online TV</h3>
						<p class="feature__text">Expand your entertainment horizons with our Online TV. Stream live TV channels, catch up on your favorite shows, and enjoy a wide range of television content online.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"></path></svg>
						</span>
						<h3 class="feature__title">Early access to new items</h3>
						<p class="feature__text">Be the first to experience the latest movies and exclusive content with our Early Access feature. Get a sneak peek into upcoming releases, gain access to special screenings, and stay ahead of the curve.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.83,13.45a1,1,0,0,0-1.66,0l-4,6a1,1,0,0,0,0,1A1,1,0,0,0,8,21h8a1,1,0,0,0,.88-.53,1,1,0,0,0-.05-1ZM9.87,19,12,15.8,14.13,19ZM19,3H5A3,3,0,0,0,2,6v9a3,3,0,0,0,3,3h.85a1,1,0,1,0,0-2H5a1,1,0,0,1-1-1V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1v9a1,1,0,0,1-1,1h-.85a1,1,0,0,0,0,2H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Z"></path></svg>
						</span>
						<h3 class="feature__title">download</h3>
						<p class="feature__text">Say goodbye to buffering and internet restrictions – now you can download your preferred content in advance and indulge in uninterrupted entertainment on your terms.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<span class="feature__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.05566,12h-2a1,1,0,0,0,0,2v2H17.8714a2.96481,2.96481,0,0,0,.18426-1A2.99955,2.99955,0,0,0,12.458,13.50049a.99992.99992,0,1,0,1.73242.999A1.0009,1.0009,0,0,1,15.05566,14a1,1,0,0,1,0,2,1,1,0,0,0,0,2,1,1,0,1,1,0,2,1.0009,1.0009,0,0,1-.86523-.49951.99992.99992,0,1,0-1.73242.999A2.99955,2.99955,0,0,0,18.05566,19a2.96481,2.96481,0,0,0-.18426-1h1.18426v3a1,1,0,0,0,2,0V14a1,1,0,1,0,0-2ZM9.08594,11.24268a.99963.99963,0,1,0,1.93945-.48536L9.26855,3.72754a2.28044,2.28044,0,0,0-4.4248,0L3.08594,10.75732a.99963.99963,0,1,0,1.93945.48536L5.58618,9H8.52545ZM6.0863,7l.6969-2.78711a.29222.29222,0,0,1,.5459,0L8.02563,7Zm7.96936,0h1a1.001,1.001,0,0,1,1,1V9a1,1,0,0,0,2,0V8a3.00328,3.00328,0,0,0-3-3h-1a1,1,0,0,0,0,2Zm-4,9h-1a1.001,1.001,0,0,1-1-1V14a1,1,0,0,0-2,0v1a3.00328,3.00328,0,0,0,3,3h1a1,1,0,0,0,0-2Z"></path></svg>
						</span>
						<h3 class="feature__title">Multi language subtitles</h3>
						<p class="feature__text">Break language barriers and enjoy movies from around the world with our multi-language subtitles. Explore different cultures, expand your cinematic horizons, and appreciate the beauty of global cinema.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end about -->

	<!-- how it works -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">How It Works</h2>
				</div>
				<!-- end section title -->

				<!-- how box -->
				<div class="col-12 col-lg-4">
					<div class="how">
						<span class="how__number">01</span>
						<h3 class="how__title">Create an account</h3>
						<p class="how__text">Start your movie-watching journey by creating a personalized account on our platform. Sign up easily and gain access to a world of entertainment.</p>
					</div>
				</div>
				<!-- ebd how box -->

				<!-- how box -->
				<div class="col-12 col-lg-4">
					<div class="how">
						<span class="how__number">02</span>
						<h3 class="how__title">Choose your plan</h3>
						<p class="how__text">Select the perfect plan that suits your preferences and watching habits. We offer a range of subscription options from basic plans to premium plans.</p>
					</div>
				</div>
				<!-- ebd how box -->

				<!-- how box -->
				<div class="col-12 col-lg-4">
					<div class="how">
						<span class="how__number">03</span>
						<h3 class="how__title">Enjoy CineVibe</h3>
						<p class="how__text">Immerse yourself in the world of CineVibe, where unlimited movie streaming awaits. With our vast collection of movies there's something for everyone.</p>
					</div>
				</div>
				<!-- ebd how box -->
			</div>
		</div>
	</section>
	<!-- end how it works -->

	<section class="section section--dark section--bt">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--carousel">Roadmap</h2>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__roadmap splide splide--roadmap">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="roadmap roadmap--active">
										<h3 class="roadmap__title">2023 Q4</h3>
										<ul class="roadmap__list">
											<li>Conduct market research on movies and TV series, study the needs and preferences of the target audience.</li>
											<li>Determine the main goals and objectives of the site: providing content, functionality and design.</li>
										</ul>
									</div>
								</li>

								<li class="splide__slide">
									<div class="roadmap roadmap--active">
										<h3 class="roadmap__title">2024 Q1</h3>
										<ul class="roadmap__list">
											<li>Create an information architecture for the site, defining the main sections and content categories.</li>
											<li>Development of an attractive and intuitive site design, providing easy navigation and high user interactivity.</li>
										</ul>
									</div>
								</li>

								<li class="splide__slide">
									<div class="roadmap">
										<h3 class="roadmap__title">2024 Q2</h3>
										<ul class="roadmap__list">
											<li>Creating a database for movies and TV series including information on title, genre, actors, ratings and reviews.</li>
											<li>Development of a powerful search engine which will allow users to easily find films and TV series.</li>
										</ul>
									</div>
								</li>

								<li class="splide__slide">
									<div class="roadmap">
										<h3 class="roadmap__title">2024 Q3</h3>
										<ul class="roadmap__list">
											<li>Developing a user registration and authorization system to create personal accounts.</li>
											<li>Implementation of the ability to save films or series in the "Favorites" list, leave reviews and ratings.</li>
										</ul>
									</div>
								</li>

								<li class="splide__slide">
									<div class="roadmap">
										<h3 class="roadmap__title">2024 Q4</h3>
										<ul class="roadmap__list">
											<li>Protection of user data, applying appropriate security protocols.</li>
											<li>Testing the site on different devices and browsers, fixing bugs and improving performance.</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>

	<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-xl-10">
					<h2 class="section__title">Our Partners</h2>

					<p class="section__text">We strive for long-term cooperation with our partners, and our team is always ready to meet and consider new opportunities for mutual benefits. If you would like to become our partner, we are always open to new offers and look forward to hearing from you. <a href="contacts.php">Become a partner</a></p>
				</div>
				<!-- end section text -->
			</div>

			<div class="row">
				<div class="col-12">
					<div class="partners">
						<a href="#" class="partners__item">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item partners__item--prelast">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item partners__item--last">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- end footer -->

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

<!-- Mirrored from CineVibe.volkovdesign.com/main/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Feb 2024 13:27:57 GMT -->
</html>