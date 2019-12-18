<?php
//delete.php
include("connection.php");
if(isset($_POST["car_number"]))
{
 $query = "DELETE FROM transaction WHERE car_number = '".$_POST["car_number"]."'";
 if(mysqli_query($connection, $query))
 {
  echo 'Data Deleted';
 }
}
?>