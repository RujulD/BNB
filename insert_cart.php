<html>
<head>
<title> UPLOAD AN IMAGE</title>
</head>
<body>
<h2>MEXICAN</h2>
<h4>Add Images of Drinks to the Database</h4><br><br>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image">
<input type = "submit" name = "submit" value = "Upload">
</form>
<h4>Add images of Breakfast(Food) to the Database</h4><br><br>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image1">
<input type = "submit" name = "submit1" value = "Upload">
</form><br><br>
<h2>INDIAN</h2>
<h4>Add Images of Drinks to the Database</h4><br><br>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image2">
<input type = "submit" name = "submit2" value = "Upload">
</form>
<h4>Add images of Breakfast(Food) to the Database</h4><br><br>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image5">
<input type = "submit" name = "submit5" value = "Upload">
</form><br><br>
<h2>AMERICAN</h2>
<h4>Add Images of Drinks to the Database</h4><br><br>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image3">
<input type = "submit" name = "submit3" value = "Upload">
</form>
<h4>Add images of Breakfast(Food) to the Database</h4>
<form action = "insert_cart.php" method ="POST" enctype ="multipart/form-data">
<input type = "file" name = "image4">
<input type = "submit" name = "submit4" value = "Upload">
</form>
<?php

//connecting with the cart_american database
$conn4 = mysqli_connect("localhost", "root", "", "cart_american") or die();

//The following code is for inserting to the breakfast Table
if(isset($_POST['submit4']))
{
$imagetmp4= $_FILES["image4"]["tmp_name"];
$imagename4= $_FILES["image4"]["name"];
$imagesize4= $_FILES["image4"]["size"];
$imagebasename4 = basename($_FILES["image4"]["name"]); 
  $check4=mysqli_query($conn4,"select * from breakfast where name = '$imagename4'");
    $checkrows4=mysqli_num_rows($check4);

if(empty($imagename4)|| empty($imagebasename4))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize1> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows4>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir4 = "Uploads/breakfast_amer/";
$final_dir4 = $dir4.$imagebasename1;

move_uploaded_file($imagetmp4, $final_dir4);

// insert into DB

$sql4 = mysqli_query($conn4, "INSERT into `breakfast` (name, image_path) VALUES ('".$imagebasename4."','".$final_dir4."')");
if($sql4)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql4 = "SELECT * FROM breakfast";

$query4 = mysqli_query($conn4, $dbsql4);

while($row4 = mysqli_fetch_assoc($query4) or die)
{ 
?>
	<img src = "<?php echo $row4 ['image_path'];?>" />;
<?php
	}
}
}

//connecting with the cart_american database
$conn3 = mysqli_connect("localhost", "root", "", "cart_american") or die();

//The following code is for inserting to the drinks Table
if(isset($_POST['submit3']))
{
$imagetmp3= $_FILES["image3"]["tmp_name"];
$imagename3= $_FILES["image3"]["name"];
$imagesize3= $_FILES["image3"]["size"];
$imagebasename3 = basename($_FILES["image3"]["name"]); 
  $check3=mysqli_query($conn3,"select * from drinks where name = '$imagename3'");
    $checkrows3=mysqli_num_rows($check3);

if(empty($imagename3)|| empty($imagebasename3))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize3> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows3>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir3 = "Uploads/drink_amer/";
$final_dir3 = $dir3.$imagebasename3;

move_uploaded_file($imagetmp3, $final_dir3);

// insert into DB

$sql3 = mysqli_query($conn3, "INSERT into `drinks` (name, image_path) VALUES ('".$imagebasename3."','".$final_dir3."')");
if($sql3)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql3 = "SELECT * FROM drinks";

$query3 = mysqli_query($conn3, $dbsql3);

while($row3 = mysqli_fetch_assoc($query3) or die)
{ 
?>
	<img src = "<?php echo $row3 ['image_path'];?>" />;
<?php
	}
}
}


//connecting with the cart_indian database
$conn5 = mysqli_connect("localhost", "root", "", "cart_indian") or die();

//The following code is for inserting to the breakfast Table
if(isset($_POST['submit5']))
{
$imagetmp5= $_FILES["image5"]["tmp_name"];
$imagename5= $_FILES["image5"]["name"];
$imagesize5= $_FILES["image5"]["size"];
$imagebasename5 = basename($_FILES["image5"]["name"]); 
  $check5=mysqli_query($conn5,"select * from breakfast where name = '$imagename5'");
    $checkrows5=mysqli_num_rows($check5);

if(empty($imagename5)|| empty($imagebasename5))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize5> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows5>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir5 = "Uploads/breakfast_ind/";
$final_dir5 = $dir5.$imagebasename5;

move_uploaded_file($imagetmp5, $final_dir5);

// insert into DB

$sql5 = mysqli_query($conn5, "INSERT into `breakfast` (name, image_path) VALUES ('".$imagebasename5."','".$final_dir5."')");
if($sql5)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql5 = "SELECT * FROM breakfast";

$query5 = mysqli_query($conn5, $dbsql5);

while($row5 = mysqli_fetch_assoc($query5) or die)
{ 
?>
	<img src = "<?php echo $row5 ['image_path'];?>" />;
<?php
	}
}
}


//connecting with the cart_indian database
$conn2 = mysqli_connect("localhost", "root", "", "cart_indian") or die();

//The following code is for inserting to the drinks Table
if(isset($_POST['submit2']))
{
$imagetmp2= $_FILES["image2"]["tmp_name"];
$imagename2= $_FILES["image2"]["name"];
$imagesize2= $_FILES["image2"]["size"];
$imagebasename2 = basename($_FILES["image2"]["name"]); 
  $check2=mysqli_query($conn2,"select * from drinks where name = '$imagename2'");
    $checkrows2=mysqli_num_rows($check2);

if(empty($imagename2)|| empty($imagebasename2))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize2> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows2>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir2 = "Uploads/drink_ind/";
$final_dir2 = $dir2.$imagebasename2;

move_uploaded_file($imagetmp2, $final_dir2);

// insert into DB

$sql2 = mysqli_query($conn2, "INSERT into `drinks` (name, image_path) VALUES ('".$imagebasename2."','".$final_dir2."')");
if($sql2)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql2 = "SELECT * FROM drinks";

$query2 = mysqli_query($conn2, $dbsql2);

while($row2 = mysqli_fetch_assoc($query2) or die)
{ 
?>
	<img src = "<?php echo $row2 ['image_path'];?>" />;
<?php
	}
}
}



//connecting with the cart_mexican database
$conn1 = mysqli_connect("localhost", "root", "", "cart_mexican") or die();

//The following code is for inserting to the breakfast Table
if(isset($_POST['submit1']))
{
$imagetmp1= $_FILES["image1"]["tmp_name"];
$imagename1= $_FILES["image1"]["name"];
$imagesize1= $_FILES["image1"]["size"];
$imagebasename1 = basename($_FILES["image1"]["name"]); 
  $check1=mysqli_query($conn1,"select * from breakfast where name = '$imagename1'");
    $checkrows1=mysqli_num_rows($check1);

if(empty($imagename1)||empty($imagebasename1))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize1> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows1>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir1 = "Uploads/breakfast_mex/";
$final_dir1 = $dir1.$imagebasename1;

move_uploaded_file($imagetmp1, $final_dir1);

// insert into DB

$sql1 = mysqli_query($conn1, "INSERT into `breakfast` (name, image_path) VALUES ('".$imagebasename1."','".$final_dir1."')");
if($sql1)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql1 = "SELECT * FROM breakfast";

$query1 = mysqli_query($conn1, $dbsql1);

while($row1 = mysqli_fetch_assoc($query1) or die)
{ 
?>
	<img src = "<?php echo $row1 ['image_path'];?>" />;
<?php
	}
}
}


//connecting with the cart_mexican database
$conn = mysqli_connect("localhost", "root", "", "cart_mexican") or die();

//the following code is for inserting to Drinks Table
if(isset($_POST['submit']))
{
$imagetmp= $_FILES["image"]["tmp_name"];
$imagename= $_FILES["image"]["name"];
$imagesize= $_FILES["image"]["size"];
$imagebasename = basename($_FILES["image"]["name"]); 
  $check=mysqli_query($conn,"select * from drinks where name = '$imagename'");
    $checkrows=mysqli_num_rows($check);

if(empty($imagename)|| empty($imagebasename))
{
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "insert_cart.php";</script>';

   
}

elseif($imagesize> 16200)
{
	echo '<script>alert("Image too large!");window.location.href = "insert_cart.php";</script>';
}	
elseif($checkrows>0) {
      echo '<script>alert("Image already exists in the database!");</script>';
   } 

else{
//inserts image into the Uploads folder in the BNB folder made in www directory
$dir = "Uploads/drink_mex/";
$final_dir = $dir.$imagebasename;

move_uploaded_file($imagetmp, $final_dir);

// insert into DB

$sql = mysqli_query($conn, "INSERT into `drinks` (name, image_path) VALUES ('".$imagebasename."','".$final_dir."')");
if($sql)
{
	echo "Success";
}
else 
{
	echo "not successful";
}

//display
$dbsql = "SELECT * FROM drinks";

$query = mysqli_query($conn, $dbsql);

while($row = mysqli_fetch_assoc($query) or die)
{ 
?>
	<img src = "<?php echo $row ['image_path'];?>" />;
<?php
	}
}
}



?>


</body>
</html>
 

