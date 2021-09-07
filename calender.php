 <?php include "includes/db.php";


       $query =   "INSERT INTO people (name, phone, amount) 
       VALUES ('" . $_POST["name"] . "','" . $_POST["phone"] . "','" . $_POST["quantity"]  . "')";
       mysqli_query($connection, $query);

      ?> 

<!DOCTYPE html>
<html>

<head>
  <title> Mark Your reservation</title>
  <link rel="stylesheet" type="text/css" href="css/mark-your-calendar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
  
  <div id="picker"></div>
  <div>
    <p>Selected date: <span id="selected-date"></span></p>
    <p>Selected time: <span id="selected-time"></span></p>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/mark-your-calendar.js"></script>
  <script type="text/javascript">
    (function($) {
      $('#picker').markyourcalendar({
        availability: [
          [<?php if(d=='07/09/2021'){echo '22:0';}  else echo''; ?>, '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
        ],
        startDate: new Date(<?php date('Y-m-d') ?>),
        onClick: function(ev, data) {
          // data is a list of datetimes
          var d = data[0].split(' ')[0];
          var t = data[0].split(' ')[1];
          <?php $tmp=d; ?>
          $('#selected-date').html(d);
          $('#selected-time').html(t);
          
        },
        onClickNavigator: function(ev, instance) {
          var arr = [
            [
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
          ['12:00', '13:00', '14:00', '15:00', '16:00' ,'17:00', '18:00'],
            ]
          ]
    
          instance.setAvailability(arr[0]);
        }
      });
    })(jQuery);
  </script>
</body>

</html>