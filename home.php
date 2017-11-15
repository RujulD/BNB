
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bread & Breakfast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>

<div class="container; row;clearfix content-heading" ; id ="right">
<body background = "collage3.jpg">
<style>

header {
	background-color: rgba(255,255,255,.6);
    backdrop-filter: blur(100px);
	 padding: 50px 80px 50px 80px;

}
</style>
<header>
<center>
<font style="font-family:Papyrus;" color = "#666600" >
<h1> WELCOME TO BREAKFAST ON THE RUN!</h1> 

</font>
</center>
  <!-- Trigger the modal with a button -->
<ul class="nav navbar-nav " >

<li><h4><a href="signin.php"><span class="glyphicon glyphicon-circle-arrow-right" ></span> Sign In &nbsp&nbsp </a></h4></li>
  <button type="button" class="btn btn-info btn-medium btn-warning btn-block;" data-toggle="modal" data-target="#myModal">Login</button>
</ul>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"style="padding:35px 50px; ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <center><h3><span class="glyphicon glyphicon-off"></span>&nbsp &nbsp Login Here!</h3></center>
	  
      </div>
      <div class="modal-body">
      
		<form role= "form" action = "verify.php" method ="POST">
    <div class="form-group">
      <label for="username"><span class="glyphicon glyphicon-user"></span>&nbsp Username:</label>
      <input type="text" class="form-control" name = "user" id="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span>&nbsp Password:</label>
      <input type="password" class="form-control" name = "pass" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
   <center> <button  type="submit" name = "submit"  class="btn btn-success btn-block;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp &nbspLogin </button> </center>
  </form>
  
  </div>
      <div class="modal-footer">
	   <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"></span> Cancel</button>
	  <p>Not a member? <a href = "signin.php"> Sign In </a></p>
	  <p><a href = "">Forgot Password?</a></p>

      </div>
    </div>
  </div>
</div>

</header>

</div>


</body>
</html>

