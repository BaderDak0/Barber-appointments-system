


<?php

$date = new DateTime("now", new DateTimeZone('Asia/Jerusalem') );
$date1 = new DateTime("now", new DateTimeZone('Asia/Jerusalem') );
echo $date1->format('H')+1; 
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

?>