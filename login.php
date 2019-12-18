

<?php
if(isset($_POST['login_btn']))
{
	setcookie("uid",$_POST['username'],time()+60*60*7);
	setcookie("uiid",$_POST['password'],time()+60*60*7);
}
session_start();

if(!isset($_COOKIE['uid']))
{
	$temp="";
}
else
{
	$temp=$_COOKIE['uid'] ;
}

$db = mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
if(isset($_POST['login_btn']))
{

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password= $_POST['password'];
	//$password=md5($password);
	$sql="select * from login where (username='$username' and password='$password')";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['message']="Logged In";
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:new/home.php");
	}
	else
	{
		$_SESSION['message']="<b>Password/Username incorrect</b>";
		header("location:login.php");
	}
	
	
}

?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  

      <link rel="stylesheet" href="style.css">
<script>
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(username,"Username must be filled out!")==false)
  {  user.focus(); return false;}
  else if (validate_required(password,"Password must be filled out!")==false)
  {  pass.focus(); return false;}
  }
}
</script>
  
</head>

<body>
<a href="index.html" class="btn">Cancel</a>
<div class="header">
  <div class="wrapper">
	<div class="container">
	<img src="images/bangladesh_govt_logo.png" alt="Northern Lights" width="35%" height="35%">

		<br/>
		<br/>
		<br/>
		<form method="POST" action="login.php" onSubmit="return validate_form(this)" >
			<td><input type="text" name="username" placeholder="Enter Username" class="textInput" value="<?php echo $temp ?>"/></td>
			<td><input type="text" name="email" placeholder="Enter Email" class="textInput"/></td>
			<td><input type="password" name="password" placeholder="Enter Password" class="textInput""/></td><br>
			<button type="submit" name="login_btn" id="login-button">Log In</button>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		
	</ul>
</div>
</div>


<?php
if(isset($_SESSION['message'])){
	echo "<center><div style=color:red>".$_SESSION['message']."</div>  </center>";
	unset($_SESSION['message']);
}
?>

</body>
</html>


