<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
     
      margin: auto;
  }

  </style>
</head>
<div class="container">
<style>
  html {
    height:100%;0
}


body  {
	background-color:   #ff99ff;
	  height:100%;
     margin:0;
}


    div.head {
        width:100%;
        height:250px;
    }

    div.container{

        height:100%;
    }

    div.content {
        width:100%;
    }

.align-left
{
	float: left;
}
.align-right
{
	float:right;
}

</style>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20" background = "bg2.gif">
  <div class="row">
  <nav class="navbar navbar-inverse navbar-static-top" id="myScrollspy">
   <div class="container-fluid">
    <div class="navbar-header">
	
     <ul class="nav navbar-nav ">
	   <li class="active"><a href=""> <font style="font-family:Papyrus;"><h4>Indian</h4></font></a>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" >
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#drinks1">Drinks</a></li>
          <li><a href="#breakfast1">Food</a></li>
    
        </ul>
      </li>
	  </li>
      <li ><a href=""> <font style="font-family:Papyrus;"><h4>Mexican</h4></font></a>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" >
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#drinks2">Drinks</a></li>
          <li><a href="#breakfast2">Food</a></li>
    
        </ul>
      </li>
      </li>
      <li><a href=""> <font style="font-family:Papyrus;"><h4>American</h4></font></a>
	   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" >
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#drinks3">Drinks</a></li>
          <li><a href="#breakfast3">Food</a></li>
    
        </ul>
      </li>
	  </li>
	  
    </ul>
	
	</div>
</div>
<div>
<ul class = "nav navbar-nav navbar-right">
	<li><h3><button type="button" class="btn btn-warning btn-lg "><a href= "#" data-toggle="tooltip" title="Add To Cart"></a><span class="glyphicon glyphicon-shopping-cart pull-right"></span></h3></button>
	
	</li>
	<li><h4><a href = "loggedout.php"> &nbsp &nbsp (Logout) </a> </h4></li>
	</ul>
	
	</div>
 </nav>
</div>

 <div class= "center">
   <style>
   
h2{
	color: #e6e600;
text-align: left
}
h3{
	color: #ffffb3;
text-align: left
}
center{
  margin-left: auto;
    margin-right: auto;
	margin-top: auto;
    width: 75em}
</style>
      <div id= "drinks1">
   <center>    <font style="font-family:Papyrus;">

  <h2> Indian Drinks </h2><br> 
	 <center>
	 <center>
</center>
</font>	
<?php	

$conn2 = mysqli_connect("localhost", "root", "", "cart_indian") or die();
$dbsql2 = "SELECT * FROM drinks";

$query2 = mysqli_query($conn2, $dbsql2);

while($row2 = mysqli_fetch_assoc($query2) or die)
{ 
?>
	<img src = "<?php echo $row2 ['image_path'];?>" />;
<?php
}


?>
</center>
<br><br>
      </div>
	  	  
<br><br>
 <div id= "breakfast1">
   <center>    <font style="font-family:Papyrus;">

  <h2> Indian Food </h2><br> 
	 <center>
	 <center>
</center>
</font>	

<?php	

$conn5 = mysqli_connect("localhost", "root", "", "cart_indian") or die();
$dbsql5 = "SELECT * FROM breakfast";

$query5 = mysqli_query($conn5, $dbsql5);

while($row5  = mysqli_fetch_assoc($query5) or die)
{ 
?>
	<img src = "<?php echo $row5 ['image_path'];?>" />;
<?php
	}

?>
</center>
<br><br>
      </div>
	  	  

      <div id="drinks2">
         <center> <font style="font-family:Papyrus;">
	 <h2> Mexican Drinks </h2> <br>
	  </font>
<?php
$conn = mysqli_connect("localhost", "root", "", "cart_mexican") or die();

$dbsql = "SELECT * FROM drinks";

$query = mysqli_query($conn, $dbsql);

while($row = mysqli_fetch_assoc($query) or die)
{ 
?>
	<img src = "<?php echo $row ['image_path'];?>" />;
<?php
	}

?>

</center>
	  
</div>
<br><br>
	   <div id= "breakfast2">
   <center>    <font style="font-family:Papyrus;">

  <h2> Mexican Food </h2><br> 
	 <center>
	 <center>
</center>
</font>
<?php	

$conn1 = mysqli_connect("localhost", "root", "", "cart_mexican") or die();
$dbsql1 = "SELECT * FROM breakfast";

$query1 = mysqli_query($conn1, $dbsql1);

while($row1 = mysqli_fetch_assoc($query1) or die)
{ 
?>
	<img src = "<?php echo $row1 ['image_path'];?>" />;
<?php
	}

?>

</center>
<br><br>
      </div>
	  	  
<br><br>
<div id="drinks3">
         <center> <font style="font-family:Papyrus;">
	 <h2> American Drinks </h2> <br>
	  </font>
<?php	

$conn3 = mysqli_connect("localhost", "root", "", "cart_american") or die();
$dbsql3 = "SELECT * FROM drinks";

$query3 = mysqli_query($conn3, $dbsql3);

while($row3 = mysqli_fetch_assoc($query3) or die)
{ 
?>
	<img src = "<?php echo $row3 ['image_path'];?>" />;
<?php
	}

?>	  
</center>
<br><br>
      </div>
	  <br><br>
 <div id= "breakfast3">
   <center>    <font style="font-family:Papyrus;">

  <h2> American Food </h2><br> 
	 <center>
	 <center>
</center>
</font>	
<?php	

$conn4 = mysqli_connect("localhost", "root", "", "cart_american") or die();
$dbsql4 = "SELECT * FROM breakfast";

$query4 = mysqli_query($conn4, $dbsql4);

while($row4  = mysqli_fetch_assoc($query4) or die)
{ 
?>
	<img src = "<?php echo $row4 ['image_path'];?>" />;
<?php
	}

?>
</center>

      </div>
	  	  

</div>


</body>
</html>



