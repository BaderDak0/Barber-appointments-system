<?php
include "includes/db.php"





?>






<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken Theme">
	<!-- Page Title -->
	<title>Barbershop and Hair Salon HTML Template</title>
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700%7CMontserrat:400,500,600,700,800,900" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
	<!-- Font Awesome & Flat icon css-->
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/flaticon.css" rel="stylesheet" media="screen">
	<!-- Carousel css -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="css/slicknav.css">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="71">
	<!-- Preloader starts -->
	<div class="preloader">
		<div class="browser-screen-loading-content">
			<div class="loading-dots dark-gray">
				<i></i>
				<i></i>
				<i></i>
				<i></i>
			</div>
			<p class="loading-text">Loading</p>
		</div>
	</div>
	<!-- Preloader Ends -->

	<!-- Header Section Starts-->
	<header>
		<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo starts -->
					<a class="navbar-brand" href="#">
						<img src="images/small-logo.png" alt="Barbershop" />
					</a>
					<!-- Logo Ends -->

					<!-- Responsive Menu button starts -->
					<div class="navbar-toggle">
					</div>
					<!-- Responsive Menu button Ends -->
				</div>

				<div id="responsive-menu"></div>

				<!-- Navigation starts -->
				<div class="navbar-collapse collapse" id="navigation">
					<ul class="nav navbar-nav navbar-right main-navigation" id="main-menu">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#service">Service</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#pricing">Pricing</a></li>
						<li><a href="#Book">Book</a></li>
						<li><a href="#" id="loginn">Login</a></li>

					</ul>
				</div>
				<!-- Navigation Ends -->
			</div>
		</nav>
	</header>
	<!-- Header Section Ends-->

	<!-- Banner Section Starts -->
	<!-- login form  -->
	<form id="loggin" class="formBox formBox2" action="./admin.html" method="POST">
		<h2 class="contact-form-title"> כניסה</h2>
		<div class="form-group flex">
			<span>user name:</span>
			<input type="text" class="form-control inpname" placeholder="Enter Your user name" name="name" required />
		</div>
		<div class="form-group flex">

			<span>password:</span>
			<input type="password" class="form-control inpname" placeholder="Enter Your password" name="name" required />
		</div>
		<div class="form-group">
			<input type="submit" class="btn-contact" value="המשך" />
		</div>
	</form>
	<!-- end login form  -->

	<!-- booking form  -->
	<form id="booking" class="formBox formBox1" action="./index.php?state=day" method="post">
		<h2 class="contact-form-title">הזמנה חדשה</h2>

		<label>מספר טלפון</label>

		<div class="form-group">
			<input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="" required>
		</div>



		<div class="form-group">
			<input type="submit" id="order" class="btn-contact" value="המשך" />
		</div>
		<div class="form-group">
			<a href="#">לקוח חדש לחץ כאן</a>
		</div>
	</form>
	<!-- end booking  -->


	<!-- start calendar -->
	<?php
	if (isset($_GET["state"]) and $_GET["state"] == "day") {

		$query  = "SELECT * FROM orders WHERE phone='"
			. $_POST["phone"] . "'";

		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_assoc($result);

		if (is_array($row)) {
			// echo '<div id="formBlur1" class="screenBlur style=" display: block;"></div>';
			
			$conter = 0;
			$today = date("d.m");
			$today1 = date("d");
			echo '<form id="timing" class=" formBox" action="./index.php?state=time" method="POST" style=" display: block;">
					<h2 class="contact-form-title"> בחר זמן</h2>
					<label>' . $row["name"] . ' שלום </label> ';

			while (++$conter != 7) {
				echo ' 
				<div class="banner-info-single text">
				
				<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
				
				</div>
				
				';
			}
			echo '</form>';
		}

		// $dayofweek = date('w', strtotime($today));

	}



	?>
	<!-- end calendar -->


	<!-- pick a clock -->
	<?php



	if (isset($_GET["state"]) and $_GET["state"] == "time") {
		$day = date("Y-m-d", strtotime($_POST["btn_day"]));

		$query  = "SELECT * FROM orders WHERE datee='"
			. $day . "'";

		$result = mysqli_query($connection, $query);

		$row = mysqli_fetch_assoc($result);


		$dateTime = date('H:i', strtotime($row["timee"]));


		$end_time = '22:00';
		$conter = 0;
		$start_time = "11:00:00";
		$interval = DateInterval::createFromDateString('15 min');
		$start = strtotime('11:00');
		$end = strtotime('22:00');
		echo  '	<form id="clock" class=" formBox formBox4" action="./index.php?state=add" method="post" style=" display: block;">
		<h2 class="contact-form-title"> בחר שעה</h2> ';

		for ($i = $start; $i <= $end; $i = $i + 15 * 60) {

			$tmp = date('H:i', $i);


			if ($tmp != $dateTime) {

				echo ' 
					<div class="banner-info-single text">
					
					<input type="submit" class="buton" name="btn" value="' .  $tmp . '">
					
					</div>
					
					';
			
			}
			else if ($row = mysqli_fetch_assoc($result)){
				
				$dateTime = date('H:i', strtotime($row["timee"]));

			}
		}


		echo	'</form>';
	}


	?>


	<!-- end pick  -->
	<section class="banner" id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-banner">
						<img src="images/logo.png" alt="Logo" />
						<p>Discover Your Style & Beauty</p>
						<h3> <b>Zahe Daka</b> <br />Style & Design</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="banner-info-single text">
						<div class="icon-box"><i class="fa fa-clock-o"></i></div>
						<h3>שעות פתיחה</h3>
						<p>ראשון – שבת: 11:30 – 22:00</p>
						<p>שלישי סגור</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="banner-info-single text">
						<div class="icon-box"><i class="fa fa-map-marker"></i></div>
						<h3>מקום</h3>
						<p> באקה אל גרביה</p>
						<p>כביש ראשי</p>
						<p></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="banner-info-single text">
						<div class="icon-box"><i class="fa fa-phone"></i></div>
						<h3>מספר טלפון</h3>
						<p>0506655919</p>
						<p>לבירורים</p>
					</div>
				</div>
				<a href="#" id="boking">
					<div class="col-md-4">
						<div class="banner-info-single text">

							<div class="icon-box"><i class="fa  fa-calendar"></i></div>
							<h3> הזמנת תור</h3>
							<p class='viss'>0506655919</p>

							<p class='viss'>לבירורים</p>


						</div>
					</div>
				</a>

			</div>
		</div>

		<div class="banner-icon"><i class="flaticon-hair-salon-situation"></i></div>
	</section>
	<!-- Banner Section Ends -->
	<div id="toolsBlur" class="screenBlur"></div>
	<!-- About us section starts -->
	<section class="aboutus" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>About Barber Shop</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="about-image">
						<div class="about-img-single">
							<img src="images/about-1.jpg" alt="" />
						</div>

						<div class="about-img-single">
							<img src="images/about-2.jpg" alt="" />
						</div>

						<div class="about-img-single">
							<img src="images/about-3.jpg" alt="" />
						</div>
					</div>

					<div class="about-desc">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About us section ends -->

	<!-- Services section starts -->
	<section class="service" id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Services</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="service-single">
						<div class="icon-box-outer">
							<div class="icon-box">
								<i class="flaticon-shaver"></i>
							</div>
						</div>

						<h3>עיצוב שיער</h3>
						<p>כל סוגי העיצובים המודרני </p>

					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="service-single">
						<div class="icon-box-outer">
							<div class="icon-box">
								<i class="flaticon-razor"></i>
							</div>
						</div>

						<h3>עיצוב זקן</h3>
						<p>עיצוב זקן באופן מקצועי</p>

					</div>
				</div>


				<div class="col-md-3 col-sm-6">
					<div class="service-single">
						<div class="icon-box-outer">
							<div class="icon-box">
								<i class="flaticon-brush"></i>
							</div>
						</div>

						<h3>טיפול פנים</h3>
						<p>ניקוי פנים/מסכות/חומרים טבעיים</p>

					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service-single">
						<div class="icon-box-outer">
							<div class="icon-box">
								<i class="flaticon-scissors"></i>
							</div>
						</div>

						<h3>מוצרי יופי</h3>
						<p>בשמים/מוצרי פנים/מוצרי שיער</p>

					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Services section ends -->



	<!-- Photo Gallery section starts -->
	<section class="gallery" id="gallery">
		<div class="container-fluid">
			<div class="row no-pad">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Our Works</h2>
					</div>
				</div>
			</div>

			<div class="row no-pad">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-1.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 1</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-2.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 2</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-3.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 3</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-4.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 4</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-5.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 5</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-6.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 6</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-7.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 7</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-8.jpg" alt="" />
						</figure>

						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>Hair Style 8</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Photo Gallery section ends -->
	<div id="formBlur" class="screenBlur"></div>
	<!-- Pricing Section starts -->
	<div class="pricing" id="pricing">
		<div class="container">
			<div class="row no-pad">
				<div class="col-md-6">
					<div class="store-image">
						<img src="images/store.jpg" alt="" />
					</div>
				</div>

				<div class="col-md-6">
					<div class="pricing-logo">
						<img src="images/logo.png" alt="" />
					</div>

					<div class="price-list">
						<div class="price-item">תספורת גברים</div>
						<div class="price-line"></div>
						<div class="price-amount">20₪</div>
					</div>

					<div class="price-list">
						<div class="price-item">תספורת ילדים</div>
						<div class="price-line"></div>
						<div class="price-amount">25₪</div>
					</div>


					<div class="price-list">
						<div class="price-item">טיפול פנים</div>
						<div class="price-line"></div>
						<div class="price-amount">50₪</div>
					</div>

					<div class="price-list">
						<div class="price-item">טיפול כללי</div>
						<div class="price-line"></div>
						<div class="price-amount">100₪</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Section ends -->

	<!-- Testimonial section starts -->
	<!-- <section class="testimonial" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Customer Testimonial</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12"> -->
	<!-- Header slider starts -->
	<!-- <div class="owl-carousel owl-theme testimonial-slider" id="testimonial-slider">
						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Eric Gartner</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Jonty Roads</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Esha Gupta</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Eric Gartner</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Jonty Roads</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Esha Gupta</h3>
							</div>
						</div>


					</div> -->
	<!-- Header slider ends -->
	<!-- </div>
			</div>
		</div>
	</section> -->
	<!-- Testimonial section ends -->

	<!-- Contactus section starts -->
	<!-- <section class="contactus" id="Book">
		<div class="container-fluid">
			<div class="row no-pad">
				<div class="col-md-4">
					<div class="contact-form">
						<h2 class="contact-form-title">Book Now</h2>
						<form action="./calender.php?status=add" method="POST">
							<div class="form-group">
								<input type="text" class="form-control inpname" placeholder="Enter Your Name" name="name" required />
							</div>

							<div class="form-group">
								<input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
							</div>

							<div class="form-group">
								<input type="number" id="quantity" name="quantity" placeholder="Amount of people" required>
							</div>

							<div class="form-group">
								<input type="submit" class="btn-contact" value="Submit" />
							</div>
						</form>

					</div>
				</div> -->

	<!-- <div class="col-md-8">
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.723033070624!2d70.75848835!3d22.280612599999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1504611295336" height="600" style="border:0;width:100%;" allowfullscreen></iframe>
					</div>
				</div> -->
	</div>
	</div>
	</section>
	<!-- Contactus section ends -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-social">
						<a href="#">Facebook</a>
						<a href="#">Twitter</a>
						<a href="#">Instagram</a>
						<a href="#">Pinterest</a>
						<a href="#">Googleplus</a>
						<a href="#">Linkedin</a>
					</div>

					<div class="site-info">
						<p>Copyright &copy; Bader Daka & Adham Jaber 2021</p>
						<!-- <p>Copyright &copy; Untitled. All rights reserved. Design By <a href="https://awaikenthemes.com/" target="_blank">Awaiken Theme</a> Images <a href="https://unsplash.com/" target="_blank">Unsplash</a>, <a href="https://pixabay.com/" target="_blank">Pixabay</a>, <a href="http://www.freepik.com" target="_blank">Freepik</a>, Icon <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></p> -->
					</div>

					<div class="footer-menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Team</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Slick Nav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- Owl Carousel js file -->
	<script src="js/owl.carousel.js"></script>
	<!-- Main Custom js file -->
	<script src="js/function.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="js/scripts.js"></script>
</body>

</html>