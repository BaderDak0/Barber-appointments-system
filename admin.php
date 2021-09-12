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


<body>



	<?php
	include "includes/db.php";


	// $query  = "SELECT * FROM orders ";
	// $result = mysqli_query($connection, $query);
	// if(!$result)
	//     echo "connection error";
	//     $dateTime = date("Y-m-d");
	//     $timestamp= strtotime($dateTime);
	//     $day = date('l', $timestamp);
	// echo  '	<form id="clock" class=" formBox formBox5" action="./index.php?state=add" method="post" style=" display: block;">';
	// echo '<h3>'.$day .'</h3>';
	// echo '<h3>'.$dateTime .'</h3>';
	// while($row = mysqli_fetch_assoc($result))
	// {
	//     $query2 = "SELECT * FROM customers WHERE phone='" . $row["phone"] . "'";
	//     $result2 = mysqli_query($connection, $query2);
	//     if(!$result2)
	//         echo "connection problem";
	//     $row2 = mysqli_fetch_assoc($result2);
	//     echo ' 
	//     <div class="banner-info-single text"> '  ; 
	//     echo $row2["name"];
	//     echo '  ';
	//     echo $row["phone"];
	//     echo '  ';
	//     echo $row["datee"];
	//     echo '  ';
	//     echo $row["timee"];
	//     echo '</div>';


	// }
	// echo '<button type="button" class="btn btn-primary">Prev</button>';
	// echo '<button type="button" class="btn btn-primary">Next</button>';

	// echo '</form>';
	if ((isset($_GET["state"]) and $_GET["state"] == "zaheday") or !isset($_GET["state"])) {
	function getWeekday($date)
	{
		return date('w', strtotime($date));
	}
	$conter = 0;
	$today = date("Y-m-d");

	echo '<form id="zahe_day" class="formBox" action="./admin.php?state=zahetime" method="POST" style=" display: block;">

		<h2 class="contact-form-title"> בחר יום</h2>
		<label>שלום זאהי דקה </label> ';
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
	}
	if (isset($_GET["state"]) and $_GET["state"] == "zahetime" && !empty($_POST["zahe_day"])) {
		// echo '<form id="back_arroww"  action="./index.php?state=zaheday" method="post" ">';
		// echo '  <input type="hidden" name="phone" value="' . $_POST["phon"] . '"> ';
		// echo '</form>';

		echo '<form id="zahe_day" class=" formBox" action="./admin.php?state=zahetime" method="POST" style=" display: block;">

		<h2 class="contact-form-title">  הזמנות של יום:'.$_POST["zahe_day"].'</h2>
		<a  href="./admin.php?state=zaheday" id="back-arroww" ></a>
		<label>שלום זאהי דקה </label> ';
	echo'<div class="vertical-line-1"></div>';

		echo '<div class="vertical-line-1"></div>';
		$query  = "SELECT * FROM orders  where datee='"
		. $_POST["zahe_day"] . "'  ";
		$result = mysqli_query($connection, $query);
		while (	$row = mysqli_fetch_assoc($result)) {
			$query1  = "SELECT * FROM customers  where phone='"
			. $row["phone"] . "'  ";
			$result1 = mysqli_query($connection, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$dateTime = date('H:i', strtotime($row["timee"]));
				
			echo ' 
				<div class="banner-info-single text days_click">
				
				<label>  שם: '.$row1["name"].' </label>
				<label> '.$row1["phone"].':מספר טלפון</label>
				<label> '.$dateTime.' :זמן</label>
			</div>
				
				
				
				';
		}
	}



	?>






</body>

</html>