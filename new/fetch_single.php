<?php
//fetch_single.php
include("connection.php");
if(isset($_POST["car_number"]))
{
 //$output = array();
 $query = "SELECT * FROM transaction WHERE car_number = '".$_POST["car_number"]."'";
 $result = mysqli_query($connection, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output["user_name"] = $row["user_name"];
  $output["contact"] = $row["contact"];
  $output["illegal"] = $row["illegal"];
 }
 echo json_encode($output);
}

?>
