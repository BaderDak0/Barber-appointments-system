<?php
include "includes/db.php";

if (isset($_GET["state"]) and $_GET["state"] == "add" && !empty($_POST["dat"]) && !empty($_POST["phon1"]) && !empty($_POST["btn_time"])) {

	// $query1  = "SELECT * FROM orders WHERE  datee= ='"
	// 	. $_POST["dat"] .  "' and 
	// 	 timee  ='". $_POST["btn_time"] .  "' " ;

	$query1  = "SELECT * FROM orders WHERE timee='"
		. $_POST["btn_time"] . "' and datee='"
		. $_POST["dat"] . "'  ";
	$result1 = mysqli_query($connection, $query1);
	$row1 = mysqli_fetch_assoc($result1);
	if (!is_array($row1)) {

		$query = "INSERT INTO orders (phone,datee, timee) 
					VALUES ('" . $_POST["phon1"] . "','" . $_POST["dat"] . "','" . $_POST["btn_time"] .  "')";
		// echo $query;
		$result = mysqli_query($connection, $query);
		if (!$result)
			echo 'connectiong failed';  //CHANGE
	} else {
		// echo 'the order is exits';
	}
} elseif (isset($_GET["state"]) and $_GET["state"] == "signupp" && !empty($_POST["namee"]) && !empty($_POST["phone"])) {


	$query  = "SELECT * FROM customers WHERE phone='"
		. $_POST["phone"] . "'";

	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	if (!is_array($row)) {
		$query =   "INSERT INTO customers (name,phone)
			VALUES ('" . $_POST["namee"] . "','" . $_POST["phone"] .  "')";
		$result = mysqli_query($connection, $query);
		if (!$result)
			echo 'connectiong failed';  				// change
	} else {
		echo 'the number is exits';        // change 
	}
}


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

<body data-spy="scroll" data-target="#navigation" data-offset="71" id="bodyy">
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
						<li><a href="#" id="loginn">Login</a></li>

					</ul>
				</div>
				<!-- Navigation Ends -->
			</div>
		</nav>
	</header>
	<!-- Header Section Ends-->
	<?php

	?>
	<!-- Banner Section Starts -->
	<!-- login form  -->
	<form id="loggin" class="formBox formBox2" action="./index.php?state=zaheday" method="POST">
		<h2 class="contact-form-title"> כניסה</h2>
		<div class="vertical-line-1"></div>

		<label>שם המשתמש</label>
		<div class="form-group">
			<input type="text" id="user" name="user" placeholder=" שם המשתמש" required>
		</div>
		<label>סיסמה</label>
		<div class="form-group flex">
			<input type="password" class="form-control inpname" placeholder="סיסמה" name="pass" required />
		</div>
		<div class="form-group">
			<input type="submit" class="btn-contact" value="המשך" />
		</div>
	</form>
	<!-- end login form  -->

	<!-- booking form  -->
	<form id="booking" class="formBox formBox1" action="./index.php?state=day" method="post">
		<?php
		if (isset($_GET["state"]) and $_GET["state"] == "signup") {
			echo ' <h2 class="contact-form-title"> הרשמה</h2> ';
			echo '<div class="vertical-line-1"></div>';

			echo '
		<label>שם</label>
		
		<div class="form-group">
			<input type="text" id="nam" name="namee" value="" required>
		</div> ';
		} else {
			echo ' <h2 class="contact-form-title"> הזמנה חדשה</h2> ';
			echo '<div class="vertical-line-1"></div>';
		}

		?>

		<label>מספר טלפון</label>

		<div class="form-group">
			<input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="" required>
		</div>

		<!-- <label>טלפון</label> -->


		<div class="form-group">
			<input type="submit" id="order" class="btn-contact" value="המשך" />
		</div>
		<?php
		if ((isset($_GET["state"]) and $_GET["state"] != "signup") or !isset($_GET["state"])) {
			echo ' <div class="form-group">
			<a href="./index.php?state=signup">לקוח חדש לחץ כאן</a>
		</div> ';
		} else {
			echo ' <div class="form-group">
			<a href="./index.php">כניסה</a>
		</div> ';
		}
		?>
	</form>
	<!-- end booking  -->


	<!-- day form -->
	<?php
	function getWeekday($date)
	{
		return date('w', strtotime($date));
	}
	if (isset($_GET["state"]) and $_GET["state"] == "day" && !empty($_POST["phone"])) {

		$query  = "SELECT * FROM customers WHERE phone='"
			. $_POST["phone"] . "'";

		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_assoc($result);

		if (is_array($row)) {
			$conter = 0;
			$today = date("Y-m-d");

			echo '<form id="timing" class=" formBox" action="./index.php?state=time" method="POST" style=" display: block;">
			
					<h2 class="contact-form-title"> בחר זמן</h2>
					<label>שלום ' . $row["name"] . '  </label> ';
			echo '<div class="vertical-line-1"></div>';

			echo '<input type="hidden" class="hid hid1"  value="1">';
			echo '<input type="hidden" class="hid" name="phon"  value="' . $_POST["phone"] . '">';
			while (++$conter != 8) {
				$today1 = getWeekday($today);
				switch ($today1) {
					case 0:
						echo ' 
						<div class="banner-info-single text days_click">
						
						<label class="days days_click"> יום ראשון<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
						
						';
						break;
					case 1:
						echo ' 
						<div class="banner-info-single text days_click">
						
						<label class="days days_click"> יום שני<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
						
						';
						break;
					case 2:
						$today++;
						break;

					case 3:
						echo ' 
						<div class="banner-info-single text days_click">
						
						<label class="days days_click"> יום רביעי<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
						
						';

						break;
					case 4:
						echo ' 
						<div class="banner-info-single text days_click">
						
						<label class="days days_click"> יום חמישי<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
						
						';

						break;
					case 5:
						echo ' 
						<div class="banner-info-single text days_click">
						
						<label class="days days_click"> יום שישי<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
						
						';

						break;
					case 6:
						echo ' 
							<div class="banner-info-single text days_click">
							
							<label class="days days_click"> יום שבת<input type="submit" class="buton" name="btn_day" value="' . ($today++) . '">
						   </label>
						</div>
							
							</div>
							
							';
						break;
				}
			}
			echo '</form>';
		}

		// $dayofweek = date('w', strtotime($today));

	}
	?>
	<!-- day form -->
	<!-- pick a clock -->
	<?php

	if (isset($_GET["state"]) and $_GET["state"] == "time" && !empty($_POST["btn_day"]) && !empty($_POST["phon"])) {
		// $day = date("Y-m-d", strtotime($_POST["btn_day"]));
		// date("d-", datee);
		// echo  $_POST["btn_day"];
		$query  = "SELECT * FROM orders WHERE datee='"
			. $_POST["btn_day"] . "'";

		// echo $day;	
		$result = mysqli_query($connection, $query);

		if ($row = mysqli_fetch_assoc($result)) {

			$dateTime = date('H:i', strtotime($row["timee"]));
		} else
			$dateTime = '10:00';



		$end_time = '22:00';
		$conter = 0;
		if ($_POST["btn_day"] == date("Y-m-d")) {

			$date = new DateTime("now", new DateTimeZone('Asia/Jerusalem'));
			$date1 = new DateTime("now", new DateTimeZone('Asia/Jerusalem'));
			$start_time = $date->format('i');

			while ($start_time % 15 != 0) {
				$start_time += 1;
			}

			if ($start_time == 60) {
				$start_time = 0;
				$time = $date1->format('H') + 1;
				$start_time = date('H:i', mktime($time, $start_time));
			} else {
				$time = $date1->format('H');
				$start_time = date('H:i', mktime($time, $start_time));
			}
			if ($start_time < "11:00") {
				$start_time = "11:00";
			}
		} else {
			$start_time = "11:00:00";
		}
		// echo $start_time;
		$start = strtotime($start_time);
		$end = strtotime($end_time);
		// $interval = DateInterval::createFromDateString('15 min');
		echo '<form id="back_arrow"  action="./index.php?state=day" method="post" ">';
		echo '  <input type="hidden" name="phone" value="' . $_POST["phon"] . '"> ';
		echo '</form>';
		echo  '	<form id="clock" class=" formBox formBox4" action="./index.php?state=add" method="post" style=" display: block;"> ';
		echo ' <div class="header_time" >
		<a  href="#" id="back-arrow" ></a>
		<h2 class="contact-form-title time_title"> בחר שעה</h2> 
		<div class="vertical-line-1"></div>
		</div> ';
		echo '<input type="hidden" class="hid"  value="1">';
		echo '<input type="hidden" class="hid" name="phon1"  value="' . $_POST["phon"] . '">';
		echo '<input type="hidden" class="hid" name="dat"  value="' . $_POST["btn_day"] . '">';
		for ($i = $start; $i <= $end; $i = $i + 15 * 60) {

			$tmp = date('H:i', $i);
			if ($i == $start && $tmp > $dateTime) {


				while ($row = mysqli_fetch_assoc($result)) {
					$dateTime = date('H:i', strtotime($row["timee"]));
					if ($dateTime >= $tmp) {
						break;
					}
				}
			}
			// echo $tmp;

			if ($tmp != $dateTime) {

				echo ' 
					<div class="banner-info-single text">
					
					<input type="submit" class="buton" name="btn_time" value="' .  $tmp . '">
					</div>
					';
			} else if ($row = mysqli_fetch_assoc($result)) {

				$dateTime = date('H:i', strtotime($row["timee"]));
				// echo $dateTime;
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
			 -->

	<!-- <div class="row">
				<div class="col-md-12">  -->
	<!-- Header slider starts -->
	<!-- <div class="owl-carousel owl-theme testimonial-slider" id="testimonial-slider">
						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div>  -->

	<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Eric Gartner</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div> -->

	<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Jonty Roads</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div> -->

	<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Esha Gupta</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div> -->

	<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								<h3>- Eric Gartner</h3>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-single">
								<div class="icon-box">
									<i class="fa fa-quote-left"></i>
								</div> -->
	<!-- 
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
						</div> -->


	<!-- </div> -->
	<!-- Header slider ends -->
	<!-- </div>  -->
	<!-- </div> -->
	<!-- </div>
	</section>  -->
	<!-- Testimonial section ends -->

	<!-- Contactus section starts adminnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn form -->
	<?php

	if (isset($_GET["state"]) and $_GET["state"] == "zaheday" and !empty($_POST["user"])) {
		$query1  = "SELECT * FROM users WHERE username='"
		. $_POST["user"] . "' and password='"
		. $_POST["pass"] . "'  ";
		$result = mysqli_query($connection, $query1);
		$row1 = mysqli_fetch_assoc($result);
		if (is_array($row1)) {
			
			$conter = 0;
			$today = date("Y-m-d");
			echo'<section class="testimonial" id="testimonial">
			<div class="container">';
			
			
			echo '<form id="zahe_day"  action="./index.php?state=zahetime" method="POST" style=" display: block;">
			<div class="row no-pad">
				<div class="col-md-12">
					<div class="main-title">
					<h2>  שלום זאהי דקה</h2>
					<h2> בחר יום</h2>
				
					</div>
				</div>
			</div>';
			
			echo '<div class="vertical-line-1"></div>';
		

			while (++$conter != 8) {
				$today1 = getWeekday($today);
				switch ($today1) {
					case 0:
						echo ' 
						
						
			<div class="banner-info-single text days_click">
			<label class="days days_click"> יום ראשון<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
			
			';
						break;
					case 1:
						echo ' 
			<div class="banner-info-single text days_click">
			
			<label class="days days_click"> יום שני<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
			
			';
						break;
					case 2:
						$today++;
						break;

					case 3:
						echo ' 
			<div class="banner-info-single text days_click">
			
			<label class="days days_click"> יום רביעי<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
			
			';

						break;
					case 4:
						echo ' 
			<div class="banner-info-single text days_click">
			
			<label class="days days_click"> יום חמישי<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
			
			';

						break;
					case 5:
						echo ' 
			<div class="banner-info-single text days_click">
			
			<label class="days days_click"> יום שישי<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
			
			';

						break;
					case 6:
						echo ' 
				<div class="banner-info-single text days_click">
				
				<label class="days days_click"> יום שבת<input type="submit" class="buton" name="zahe_day" value="' . ($today++) . '">
			   </label>
			</div>
				
				</div>
				
				';
						break;
				}
			}
			echo '</form>';
			echo '		</div>
			</section>';
		}
	}
	if (isset($_GET["state"]) && $_GET["state"] == "zahetime" && !empty($_POST["zahe_day"])) {
		// echo '<form id="back_arroww"  action="./index.php?state=zaheday" method="post" ">';
		// echo '  <input type="hidden" name="phone" value="' . $_POST["phon"] . '"> ';
		// echo '</form>';

		echo '<form id="zahe_day" class=" formBox" action="./admin.php?state=zahetime" method="POST" style=" display: block;">

		<h2 class="contact-form-title">  הזמנות של יום:' . $_POST["zahe_day"] . '</h2>
		<a  href="./admin.php?state=zaheday" id="back-arroww" ></a>
		<label>שלום זאהי דקה </label> ';
		echo '<div class="vertical-line-1"></div>';

		echo '<div class="vertical-line-1"></div>';
		$query  = "SELECT * FROM orders  where datee='"
			. $_POST["zahe_day"] . "'  ";
		$result = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$query1  = "SELECT * FROM customers  where phone='"
				. $row["phone"] . "'  ";
			$result1 = mysqli_query($connection, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$dateTime = date('H:i', strtotime($row["timee"]));

			echo ' 
				<div class="banner-info-single text days_click">
				
				<label>  שם: ' . $row1["name"] . ' </label>
				<label> ' . $row1["phone"] . ':מספר טלפון</label>
				<label> ' . $dateTime . ' :זמן</label>
			</div>
				
				
				
				';
		}
	}

	?>

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