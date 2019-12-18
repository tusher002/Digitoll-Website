
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> 
 <link rel="stylesheet" href="div.css">
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
	background-image: url('jWomGHM.jpg');
	
	background-size: cover;
	background-attachment: fixed;
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
p.ex2 {
    font: italic bold 80px/60px Georgia, serif;
}
</style>
 </head>
 <body>
 <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.kuet.ac.bd">
                	 
                	<p style="color:red;"><b>KUET<b><p>
                </a>
            </div>
			<form class="navbar-form navbar-left">
    </form>
			
			
			
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="hme.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="kuet.html">KUET</a>
                    </li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

<center>
<font color="blue"><p class="ex2">KUET ALUMNI</p></font></d4>
<marquee behavior="scroll" direction="left"><font color="#afa846" size="5">Dedicated for our alma matter</font></marquee><br>
<br>
</center>
  <div class="container">
   <br />
   <center><font size="8" color="violet">Bangladesh Government</font></center><br>
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by member Details" class="form-control" />
    </div>
   </div>
   <br/>
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>