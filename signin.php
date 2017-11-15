<!DOCTYPE html>
<html lang="en">
<head>
  <title>~Sign Up~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body background = "collage2.jpg">

<div class="container">
<br><br><br><br>

  <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST">
   <div class="form-group">
      <label for="username"></label>
      <input type="text" class="form-control" name="fname" placeholder="Enter First name">
    </div>
	 <div class="form-group">
      <label for="username"></label>
      <input type="text" class="form-control" name="lname" placeholder="Enter Last name">
    </div>
    <div class="form-group">
      <label for="username"></label>
      <input type="text" class="form-control" name="uname" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="pwd"></label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
	<div class="form-group">
      <label for="pwd"></label>
      <input type="password" class="form-control" name="cpwd" placeholder="Confirm password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"><font style="font-family:Papyrus;" color = "#99ffcc" ><h5> Remember me</h5></label>
    </div>
    <button type="submit"  class="btn btn-default" name = "submit">Submit</button>
  </form>
 
 
</div>
<?php
if(isset($_POST['submit']))
{ 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'login'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
if ($conn->connect_error) 
die("Connection failed: " . $conn->connect_error);
$firstname = $_POST['fname']; 
$lastname = $_POST['lname']; 
$userName = $_POST['uname']; 
$password = $_POST['pwd'];
$cpassword = $_POST['cpwd']; 
if(empty($firstname)||empty($lastname)||empty($userName)||empty($password)||empty($cpassword)){
	echo '<script>alert("Empty fields. Please fill in every field");window.location.href = "signin.php";</script>';
}

if($password!=$cpassword)
{
  echo '<script>alert("Passwords don\'t Match!");window.location.href = "signin.php";</script>';
}
$sql = "SELECT * FROM users WHERE username='".$userName."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo '<script>alert("Username already exists!");
  window.location.href = "signin.php";</script>';   
}
$sql = "INSERT INTO users (`first name`,`last name`,username,password) VALUES ('$firstname','$lastname','$userName','$password')";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("New user created successfully!");window.location.href = "home.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>


</body>
</html>