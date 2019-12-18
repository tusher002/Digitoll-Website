<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="external.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<title> Cars</title>
<style>
header{
    padding: 1em;
        background-color: gray;
    text-align: center;
	
}

body
{
	font-family: sans-serif;
	font-size: 11pt;
	background-image: url('jamuna.jpg');
	background-size: cover;
	background-attachment: fixed;
}
table
{width:80%;}
table,tr,td,th
{
	border: 1px solid black;
	border-collapse: collapse;
	opacity: 0.95;
}
th,td
{
	padding:10px;
	text-align:center;
}
th
{
	background-color: #a70000;
	color:white;
}
tr:nth-child(even)
{
	background-color:#e8e8e8;
}
tr:nth-child(odd)
{
	background-color:white;
}
a1
{
	font-size: 400%;
	color: lightpink;
}
h1
{
	font-size: 10;
	color: blue;
}
div.absolute {
    position: absolute;
    left: 20px;

}
</style>
</head>
<body>
<header>
       <center><a1>Bangladesh Government</a1><center>
	     <div class="absolute"><a href="home.php"><b>HOME</b></a></div></p><br>
</header>

<center> <h1>Cars' & Owners Information</h1> </center>
	<form name="frmRegistration" method="post" action="">
    <div class="col-sm-7 slideanim">
	  <textarea class="form-control" id="comments" name="car_number" placeholder="Car Number" rows="1"></textarea><br>
	  <textarea class="form-control" id="comments" name="illegal" placeholder="ILLEGAL ?? Type Yes or No" rows="1"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-md" type="submit" name="cnt_btn" id="cnt-button"><center>EDIT </center></button>
        </div>
      </div>
    </div>
	</form>

	
	
<?php
//session_start();
$db= mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
if(isset($_POST['cnt_btn']))
{

	$car_number=mysqli_real_escape_string($db,$_POST['car_number']);
	$illegal=mysqli_real_escape_string($db,$_POST['illegal']);
	if($illegal=="YES" || $illegal=="Yes" || $illegal=="yes")
	$query1 = "UPDATE transaction SET illegal=1 WHERE Car_Num='$car_number'";
	else if($illegal=="NO" || $illegal=="No" || $illegal=="no")
	$query1 = "UPDATE transaction SET illegal=0 WHERE Car_Num='$car_number'";
    $filter_Result1 = mysqli_query($db,$query1) or die($query1."<br/><br/>".mysql_error());


}


?>	
	
	
	
<form action="car.php" method="post">
<center>
<table>
<tr>
<th>CAR ID</th>
<th>CAR NUMBER</th>
<th>USERNAME</th>
<th>CLASS</th>
<th>CURRENT BALANCE</th>
<th>ILLEGAL</th>
<th>CONTACT</th>
</tr>



<?php
//session_start();

$query = "SELECT * FROM transaction order by Car_Num";
$connect = mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
$filter_Result = mysqli_query($connect,$query) or die($query."<br/><br/>".mysql_error());

?>



<?php while($row = mysqli_fetch_array($filter_Result)):?>
<tr>
<td><?php echo $row['Car_Id'];?></td>
<td><?php echo $row['Car_Num'];?></td>
<td><?php echo $row['user_name'];?></td>
<td><?php echo $row['Class'];?></td>
<td><?php echo $row['Current_Balance'];?></td>
<td><?php echo $row['illegal'];?></td>
<td><?php echo $row['Contact'];?></td>
</tr>
<?php endwhile;?>
</table>
</center>
</form>
<br><br><br><br>

</body>
</html>