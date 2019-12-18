<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup / Registration form using Material Design - Demo by W3lessons</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>

<body class="blue">


<?php
//session_start();
$db= mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
if(isset($_POST['cnt_btn']))
{
	$query = "select car_id from registration limit 1";
	$filter_Result = mysqli_query($db,$query) or die($query."<br/><br/>".mysql_error());
	$result = mysqli_fetch_assoc($filter_Result);
	$car_id=$result['car_id'];
	$car_num=$_POST['car_num'];
	$us=mysqli_real_escape_string($db,$_POST['us']); 
	$username=mysqli_real_escape_string($db,$_POST['username']); 
	$contact=mysqli_real_escape_string($db,$_POST['contact']);
	$query1 = "INSERT INTO transaction (Car_Id, Car_Num, Class, Contact, illegal,Current_Balance,user_name) VALUES ('$car_id', '$car_num', '$us', '$contact', 0, 500,'$username')";
    $filter_Result1 = mysqli_query($db,$query1) or die($query1."<br/><br/>".mysql_error());


}

?>





  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form name="frmRegistration" method="post" action="">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="bangladesh_govt_logo.png" alt="" class="responsive-img valign profile-image-login" width="25%" height="25%">
            <p class="center login-form-text">Set unique vehicle number, input of the Class will be uppercase.</p>
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="car_num" type="text" name="car_num" class="validate" placeholder="Car Number">
            
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="us" name="us" type="text" class="validate" >
            <label for="us" class="center-align"><div align="right">
Css</div></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text" class="validate">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="contact" type="text" name="contact" class="validate">
            <label for="contact" class="center-align">Contact</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
			<button class="btn waves-effect waves-light col s12" type="submit" name="cnt_btn" id="cnt-button"><center>Register Now</center></button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up"> <a href="home.php">Cancel</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


</body>

</html>