


<?php

$date = new DateTime("now", new DateTimeZone('Asia/Jerusalem') );
$date1 = new DateTime("now", new DateTimeZone('Asia/Jerusalem') );
// echo $date1->format('H')+1; 

function getWeekday($date)
{
    return date('w', strtotime($date));
}

echo getWeekday("2021-09-17");
// $start_time= $date->format('i');

// while ($start_time % 15 != 0) {
//     $start_time += 1;
// }

// if ($start_time == 60) {
//     $start_time = 0;
// }
// $time = $date1->format('H');

// $start_time = date('H:i', mktime($time, $start_time));
// echo $start_time;

// while (++$conter != 7) {
			// 	$today1 = getWeekday($today);
			// 	switch ($today1) {
			// 		case 0:
			// 			echo ' 
			// 	<div class="banner-info-single text">
			// 	<input type="submit" class="buton" name="btn_day" value="' . ($tmp1) . '">
				
			// 	</div>
				
			// 	';
			// 			break;

			// 		case 1:

			// 			echo ' 
			// 		<div class="banner-info-single text">
			// 		<input type="hidden" class="hid " name="btn_day"   value="' . ($tmp1) . '">
			// 		<span>  יום שני ' . ($today) . '</span>
			// 		</div>
					
			// 		';
			// 			break;
			// 		case 2:

			// 			break;
			// 		case 3:

			// 			echo ' 
			// 		<div class="banner-info-single text">
			// 		<input type="hidden" class="hid " name="btn_day"   value="' . ($tmp1) . '">
			// 		<span>  יום רביעי ' . ($today) . '</span>
			// 		</div>
					
			// 		';
			// 			break;
			// 		case 4:

			// 			echo ' 
			// 		<div class="banner-info-single text">
			// 		<input type="hidden" class="hid " name="btn_day"   value="' . ($tmp1) . '">
			// 		<span>  יום חמישי ' . ($today) . '</span>
			// 		</div>
					
			// 		';
			// 			break;
			// 		case 5:

			// 			echo ' 
			// 		<div class="banner-info-single text">
			// 		<input type="hidden" class="hid " name="btn_day"   value="' . ($tmp1) . '">
			// 		<span>  יום שישי ' . ($today) . '</span>
			// 		</div>
					
			// 		';
			// 			break;
			// 		case 6:

			// 			echo ' 
			// 		<div class="banner-info-single text">
			// 		 <span class=day_week>  יום שבת ' . ($today) . '</span>
			// 		<input type="hidden" class="hid " name="btn_day"   value="' . ($tmp1) . '">
			// 		</div>
					
			// 		';
			// 			break;
			// 	}
			// 	 $tmp1=$today++;
			// 	//  echo $today ;
			// }
            ////////////////////////////////////ADMINNNNNNNNNN ADAMMMMMMM/////////////////////////////////////// 
//             <head>
// 	<!-- Meta -->
// 	<meta charset="utf-8">
// 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
// 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
// 	<meta name="description" content="">
// 	<meta name="keywords" content="">
// 	<meta name="author" content="Awaiken Theme">
// 	<!-- Page Title -->
// 	<title>Barbershop and Hair Salon HTML Template</title>
// 	<!-- Google Fonts css-->
// 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700%7CMontserrat:400,500,600,700,800,900" rel="stylesheet">
// 	<!-- Bootstrap css -->
// 	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
// 	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
// 	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
// 	<!-- Font Awesome & Flat icon css-->
// 	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
// 	<link href="css/flaticon.css" rel="stylesheet" media="screen">
// 	<!-- Carousel css -->
// 	<link rel="stylesheet" href="css/owl.carousel.css">
// 	<!-- Slick nav css -->
// 	<link rel="stylesheet" href="css/slicknav.css">
// 	<!-- Main custom css -->
// 	<link href="css/custom.css" rel="stylesheet" media="screen">
// 	<link href="css/style.css" rel="stylesheet">

// 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
// 	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
// 	<!--[if lt IE 9]>
//       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
//       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
//     <![endif]-->
// </head>




// <?php
// include "includes/db.php";


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
// ?>
