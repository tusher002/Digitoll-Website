<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lumino Columns - Bootstrap 4.0 Theme</title>
<!--
Lumino Theme
http://www.templatemo.com/tm-483-lumino
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
		  
		  
<style>
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
    <body id="top" class="page-2">

        <div class="tm-navbar-container tm-navbar-container-dark">
       
            <nav class="navbar navbar-full navbar-fixed-top bg-inverse">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link external">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tm-section-1" class="nav-link">The Padma Bridge</a>
                        </li>
						<li class="nav-item">
                            <a href="#tm-section-3" class="nav-link">Bangabondhu Bridge</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    
        <div class="container-fluid">

            <div class="row">
              <div id="tm-section-1" class="tm-section">
                <div class="col-md-12">
                    <h1 class="text-xs-center blue-text tm-page-2-title">The Padma Multi-purpose Bridge</h1>
                    <img src="img/padma.jpg" class="img-fluid tm-banner-img" alt="Image">            
                </div>
              </div>                
            </div>
            
            <div class="row">
                <div class="tm-section" id="tm-section-2">
                    <div class="col-md-12">
                        
                        
						
						
<form action="columns.php" method="post">
<center>
<table>
<tr>
<th>DATE</th>
<th>NAME</th>
<th>CAR NUMBER</th>
<th>AMOUNT</th>

</tr>


<?php
//session_start();

$query = "SELECT date,time,Car_Num,amount FROM t_history where toll_name='Toll-1' order by date desc";
$connect = mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
$filter_Result = mysqli_query($connect,$query) or die($query."<br/><br/>".mysql_error());

?>

<?php while($row = mysqli_fetch_array($filter_Result)):?>
<tr>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['time'];?></td>
<td><?php echo $row['Car_Num'];?></td>
<td><?php echo $row['amount'];?></td>

</tr>
<?php endwhile;?>
</table>
</center>
</form>
					  
					  
                    </div>
                </div>
            </div>
			
			
			
			
			
			
			
			
			
			<div class="row">
              <div id="tm-section-3" class="tm-section">
                <div class="col-md-12">
                    <h1 class="text-xs-center blue-text tm-page-2-title">Bangabondhu Bridge</h1>
                    <img src="img/jamuna.jpg" class="img-fluid tm-banner-img" alt="Image">            
                </div>
              </div>                
            </div>
            
            <div class="row">
                <div class="tm-section" id="tm-section-4">
                    <div class="col-md-12">
                        <form action="columns.php" method="post">
<center>
<table>
<tr>
<th>DATE</th>
<th>NAME</th>
<th>CAR NUMBER</th>
<th>AMOUNT</th>

</tr>


<?php
//session_start();

$query = "SELECT date,time,Car_Num,amount FROM t_history where toll_name='Toll-2' order by date desc";
$connect = mysqli_connect("digitollbd.com","pranto","Cpanel@login07","digitoll","3306");
$filter_Result = mysqli_query($connect,$query) or die($query."<br/><br/>".mysql_error());

?>

<?php while($row = mysqli_fetch_array($filter_Result)):?>
<tr>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['time'];?></td>
<td><?php echo $row['Car_Num'];?></td>
<td><?php echo $row['amount'];?></td>

</tr>
<?php endwhile;?>
</table>
</center>
</form>
					  
					  
                    </div>
                </div>
            </div>
			
			
			
			
			
			
			
			
			


        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->           

        <!-- Templatemo scripts -->
        <script>     
         
            $(document).ready(function(){

                var mobileTopOffset = 54;
                var tabletTopOffset = 74;
                var desktopTopOffset = 79;
                var topOffset = desktopTopOffset;

                if($(window).width() <= 767) {
                    topOffset = mobileTopOffset;
                }
                else if($(window).width() <= 991) {
                    topOffset = tabletTopOffset;
                }
              
                /* Single page nav
                -----------------------------------------*/
                $('#tmNavbar').singlePageNav({
                    'currentClass' : "active",
                    offset : topOffset,
                    'filter': ':not(.external)'
                }); 

                if($(window).width() < 570) {
                    $('.tm-full-width-large-table').addClass('table-responsive');
                }
                else {
                    $('.tm-full-width-large-table').removeClass('table-responsive');   
                }
              

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');
                });

              
                /* Handle nav offset & table responsive upon window resize
                --------------------------------------------------------------*/
                $(window).resize(function(){
                    
                    if($(window).width() < 768) {
                        topOffset = mobileTopOffset;
                    } 
                    else if($(window).width() <= 991) {
                        topOffset = tabletTopOffset;
                    }
                    else {
                        topOffset = desktopTopOffset;
                    }

                    $('#tmNavbar').singlePageNav({
                        'currentClass' : "active",
                        offset : topOffset,
                        'filter': ':not(.external)'
                    });

                    if($(window).width() < 570) {
                        $('.tm-full-width-large-table').addClass('table-responsive');
                    }
                    else {
                        $('.tm-full-width-large-table').removeClass('table-responsive');   
                    }
                });
                          
            });

        </script>    
    </body>
</html>