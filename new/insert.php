<?php
//insert.php
include("connection.php");
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $balance = mysqli_real_escape_string($connection, $_POST["balance"]);
  $illegal = mysqli_real_escape_string($connection, $_POST["illegal"]);
  $car_number = mysqli_real_escape_string($connection, $_POST["car_number"]);
  $contact = mysqli_real_escape_string($connection, $_POST["contact"]);
  $class = mysqli_real_escape_string($connection, $_POST["class"]);
  $user_name = mysqli_real_escape_string($connection, $_POST["user_name"]);
  $query = "
   INSERT INTO transaction VALUES (-------#####'".$balance."', '".$illegal."', '".$car_number."' , '".$contact."', '".$class."', '".$user_name."')
  ";
  if(mysqli_query($connection, $query))
  {
   echo 'Car Registered';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $illegal = mysqli_real_escape_string($connection, $_POST["illegal"]);
  $contact = mysqli_real_escape_string($connection, $_POST["contact"]);
  $user_name = mysqli_real_escape_string($connection, $_POST["user_name"]);
  $car_number = mysqli_real_escape_string($connection, $_POST["car_number"]);
  $query = "
   UPDATE transaction 
   SET user_name = '".$user_name."', 
   Contact = '".$Contact."', 
   illegal = '".$illegal."' 
   WHERE car_number = '".$_POST["car_number"]."'
  ";
  if(mysqli_query($connection, $query))
  {
   echo 'Information Updated';
  }
 }
}
?>
