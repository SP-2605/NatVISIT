<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NatVISIT | Exciting tours for adventurous people</title>
	<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <!-- Linea-Icons-->
    <link rel="stylesheet" href="css/icon-font.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!-- Arrow Img link -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>

<body>
<!-- NAVIGATION -->
<div class="navigation">
	<input type="checkbox" class="navigation__checkbox" id="navi-toggle">

	<label for="navi-toggle" class="navigation__button">
		<span class="navigation__icon">&nbsp;</span>
	</label>

	<div class="navigation__background">&nbsp;</div>

<!-- The entire page spanning over with the contents of the navigation  -->
	<nav class="navigation__nav">
		<ul class="navigation__list">
			<li class="navigation__item"><a href="#" class="navigation__link"><span>01</span> About Natours</a></li>
			<li class="navigation__item"><a href="#" class="navigation__link"><span>02</span> Benifits</a></li>
			<li class="navigation__item"><a href="#" class="navigation__link"><span>03</span> Popular Tours</a></li>
			<li class="navigation__item"><a href="#" class="navigation__link"><span>04</span> Our Stories</a></li>
			<li class="navigation__item"><a href="#" class="navigation__link"><span>05</span> Book Now</a></li>
		</ul>
	</nav>
</div>
<header class="header">
	<div class="header__logo-box">
		<img class="header__logo" src="img\logo-white.png" alt="header__logo">
	</div>
	<div class="header__text-box">
		<h1 class="heading-primary">
			<span class="heading-primary--main">outdoors</span>
			<span class="heading-primary--sub">is where life happens</span>
		</h1>
		<a href="#tours" class="btn btn--white btn--animated">discover our tours</a>
	</div>

</header>

<main>

<!-- ABOUT	 -->

<section>
<!-- all main content of the html page sits -->
<div class="section-about">
	<div class="u-class-center u-margin-bottom-large">
		<h2 class="heading-secondary">
			Exiciting Tours For Adventurous People!
		</h2>
	</div>

	<div class="row">
		<div class="col-1-of-2">
			<h3 class="tertiary-heading u-margin-bottom-small">You'r going to fall in love with nature</h3>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
				labore et dolore magna aliqua. Elementum integer enim neque volutpat. Morbi tristique
				senectus
				et netus et malesuada fames ac.
			</p>

			<h3 class="tertiary-heading u-margin-bottom-small">Live adventures like you never had before
			</h3>
			<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
				tempor
				incididunt ut labore et dolore magna aliqua.</p>

			<a class="btn-text" href="#"> More Info <ion-icon style="position: relative; top: 4px;"
					name="arrow-dropright"></ion-icon></a>
		</div>
		<div class="col-1-of-2">
			<div class="composition">
				<img src="img/nat-1-large.jpg" alt="photo-1"
					class="composition__photo composition__photo--p1">
				<img src="img/nat-2-large.jpg" alt="photo-2"
					class="composition__photo composition__photo--p2">
				<img src="img/nat-3-large.jpg" alt="photo-3"
					class="composition__photo composition__photo--p3">
			</div>
		</div>
	</div>
</div>
</section>

<!-- FEATURES -->

<section class="section-features">
	<div class="row">

		<div class="col-1-of-4">
			<div class="feature-box">
				<img class="feature-box__icon" src="img\world-color.png" alt="world-img">
				<h3 class="tertiary-heading u-margin-bottom-small">explore the world</h3>
				<p class="feature-box__text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna
					aliqua. Non diam.
				</p>
			</div>
		</div>

		<div class="col-1-of-4">
			<div class="feature-box">
				<img class="feature-box__icon" src="img\map-color.png" alt="map-img">
				<h3 class="tertiary-heading u-margin-bottom-small">find your way</h3>
				<p class="feature-box__text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna
					aliqua. Non diam.
				</p>
			</div>
		</div>

		<div class="col-1-of-4">
			<div class="feature-box">
				<img class="feature-box__icon" src="img\heart-color.png" alt="heart-img">
				<h3 class="tertiary-heading u-margin-bottom-small">live a healthier life</h3>
				<p class="feature-box__text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna
					aliqua. Non diam.
				</p>
			</div>
		</div>

		<div class="col-1-of-4">
			<div class="feature-box">
				<img class="feature-box__icon" src="img\compass-color.png" alt="compass-img">
				<h3 class="tertiary-heading u-margin-bottom-small">meet nature</h3>
				<p class="feature-box__text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna
					aliqua. Non diam.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- TOURS -->

<section class="section-tours" id="tours">
	<div class="u-class-center u-margin-bottom-large">
		<h2 class="heading-secondary">
			Explore our tours
		</h2>
	</div>

	<div class="row">
		<div class="col-1-of-3">
			<div class="card1">
				<div class="card1__side card1__side--front">
					<div class="card1__picture">
						&nbsp;
					</div>

					<h4 class="card1__heading">
						<span class="card1__heading-span">
							The sea explorer
						</span>
					</h4>

					<div class="card1__details">
						<ul>
							<li>3 day tour</li>
							<li>Upto 30 people</li>
							<li>2 Tour Guides</li>
							<li>Sleep in cozy hotels</li>
							<li>Difficulty: Easy</li>
						</ul>
					</div>
				</div>

				<div class="card1__side card1__side--back">
					<div class="card1__cta">
						<!--cta: card to action -->
						<div class="card1__price-box">
							<p class="card1--price-only">Only</p>
							<p class="card1--price-value">₹ 21,000</p>
						</div>
					</div>
					<a class="btn--white this-btn" href="#popup">Book Now</a>
				</div>
			</div>
		</div>

		<div class="col-1-of-3">
			<div class="card2">
				<div class="card2__side card2__side--front">
					<div class="card2__picture">
						&nbsp;
					</div>

					<h4 class="card2__heading">
						<span class="card2__heading-span">
							The forest hiker
						</span>
					</h4>

					<div class="card2__details">
						<ul>
							<li>7 day tour</li>
							<li>Upto 40 people</li>
							<li>3 Tour Guides</li>
							<li>Sleep in provided tents</li>
							<li>Difficulty: Medium</li>
						</ul>
					</div>
				</div>

				<div class="card2__side card2__side--back">
					<div class="card2__cta">
						<!--cta: card to action -->
						<div class="card2__price-box">
							<p class="card2--price-only">Only</p>
							<p class="card2--price-value">₹ 35,000</p>
						</div>
					</div>
					<a class="btn--white this-btn" href="#popup">Book Now</a>
				</div>
			</div>
		</div>

		<div class="col-1-of-3">
			<div class="card3">
				<div class="card3__side card3__side--front">
					<div class="card3__picture">
						&nbsp;
					</div>

					<h4 class="card3__heading">
						<span class="card3__heading-span">
							The snow adventurer
						</span>
					</h4>

					<div class="card3__details">
						<ul>
							<li>5 day tour</li>
							<li>Upto 15 people</li>
							<li>3 Tour Guides</li>
							<li>Sleep in provided tents</li>
							<li>Difficulty: Hard</li>
						</ul>
					</div>
				</div>

				<div class="card3__side card3__side--back">
					<div class="card3__cta">
						<!--cta: card to action -->
						<div class="card3__price-box">
							<p class="card3--price-only">Only</p>
							<p class="card3--price-value">₹ 65,000</p>
						</div>
					</div>
					<a class="btn--white this-btn" href="#">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</div>
	 <!-- <div class="u-center-text u-margin-top-huge">
		<a href="#" class="btn btn--green">Discover all tours</a>
	</div> -->
</section>

<!-- STORIES -->

<section class="section-stories">
	<div class="bg-video">
		<video class="bg-video__content" loop autoplay muted>
			<source src="img/video1.mp4" type="video/mp4">
			<source src="img/video1.webm" type="video/webm">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="u-class-center u-margin-bottom-large">
		<h2 class="large heading-secondary">
			We make people geneuinly happy
		</h2>
	</div>

	<div class="row">
		<div class="story1">
			<figure class="story1__shape">
				<img src="img/nat-8.jpg" class="story1__img" alt="reviewer image">
				<figcaption class="story1__caption">Mary Smith</figcaption>
			</figure>
			<div class="story1__text">
				<h3 class="tertiary-heading u-margin-bottom-small">I had the best weekend with my family</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna
					aliqua. Nibh tortor id aliquet lectus proin nibh nisl condimentum id. Aliquam nulla facilisi
					cras fermentum odio eu.
					Ipsum dolor sit amet consectetur adipiscing facilisi cras fermentum odio eu.</p>
			</div>
		</div>

		<div class="story2">

			<figure class="story2__shape">
				<img src="img/nat-9.jpg" class="story2__img" alt="reviewer image">
				<figcaption class="story2__caption">John Hovard</figcaption>
			</figure>
			<div class="story2__text">
				<h3 class="tertiary-heading u-margin-bottom-small">Wow! My life is completely different now</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore
					magna
					aliqua. Nibh tortor id aliquet lectus proin nibh nisl condimentum id. Aliquam nulla facilisi
					cras fermentum.</p>
			</div>

		</div>
		<a class="btn-stories" href="#"> View More Reviews <ion-icon style="position: relative; top: 4px;"
				name="arrow-dropright">
			</ion-icon></a>
	</div>
</section>

<!-- BOOKING -->

<section class="section-book" id="booking">
	<div class="row">
		<div class="book" style="height:50rem;">
			<div class="book__form">
				<form action="login.php" class="form" method="POST">
				<?php include('errors.php'); ?>

					<div class="u-margin-bottom-medium">
						<h2 class="heading-secondary">
							Start booking now
						</h2>
					</div>

					<div class="form__group">
						<input type="text" class="form__input" id="name" placeholder="Full-Name" required name="username">
						<label for="name" class="form__lable">Full-Name</label>
					</div>

					<div class="form__group">
						<input type="password" class="form__input" id="password" placeholder="Password" required name="password">
						<label for="password" class="form__lable">Password</label>
					</div>

					<div class="form__group">
						<button type="submit" class="form__SignUpLoginBtn" name="login_user"><h2 class="form__SignUpLoginBtn-Text">Login <img class="form__SignUpLoginBtn-arrow" src="img/arrow.png" style="left:1.5rem" alt="Img"></h2></button>
					</div>
					<p>
  						Not yet a member yet? <a href="register.php#booking">Sign up</a>
  					</p>

				</form>
			</div>
		</div>
	</div>
</section>
</main>

<!-- FOOTER -->

<footer class="footer">
	<div class="footer__logo-box">
		<img src="img/logo-green-2x.png" class="footer__logo" alt="Logo">
	</div>
	<div class="row">
		<div class="col-1-of-2">
			<div class="footer__navigation">
				<ul class="footer__list">
					<li class="footer__items"><a class="footer__link" href="#">Company</a></li>
					<li class="footer__items"><a class="footer__link" href="#">Contact Us</a></li>
					<li class="footer__items"><a class="footer__link" href="#">Carrers</a></li>
					<li class="footer__items"><a class="footer__link" href="#">Privacy Policy</a></li>
					<li class="footer__items"><a class="footer__link" href="#">Terms</a></li>

				</ul>
			</div>
		</div>
		<div class="col-1-of-2">
			<p class="footer__copyright">
				Built by <a href="" class="footer__link">Suriya Prasath.S</a> for his practice in <a href=""
					class="footer__link">Advanced CSS and SASS</a>. Copyright &copy; by Suriya Prasath.S. You are
				100% allowed to use this webpage for both personal and commercial use but not to claim it as your
				own design. A credit to the author, Suriya Prasath, is of course highly appreciated!
			</p>
		</div>
	</div>
</footer>

<!-- POPUP -->

<div class="popup" id="popup">
	<div class="popup__content">
		<div class="popup__left">
			<img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
			<img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
		</div>
		<div class="popup__right">
			<a href="#section-tours" class="popup__close">&times;</a>
			<h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
			<h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking
			</h3>
			<p class="popup__text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua.
				Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
				amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
				sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
				gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
				Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
				vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
				vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
				euismod nisi porta.
			</p>
			<a href="#booking" class="btn btn--green" style="left: 30rem;">Book now</a>
		</div>
	</div>
</div>

</body>
</html>