 <?php include "includes/db.php";


$query =   "INSERT INTO people (name, phone, amount) 
VALUES ('" . $_POST["name"] . "','" . $_POST["phone"] . "','" . $_POST["amount"]  . "')";
mysqli_query($connection, $query);




echo "succesfuly"






?>


