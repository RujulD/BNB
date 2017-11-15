<?php
include("home.php");

$conn = mysqli_connect("localhost", "root","", "login");

$user = $_POST['user'];
$pass = $_POST['pass'];
$adminname="admin";
$adminpassword="admin";

$sql = "SELECT * FROM users WHERE username = '$user' AND password ='$pass'";
$strsql= "SELECT * FROM users WHERE username = '$adminname' AND password ='$adminpassword'";
$res = mysqli_query($conn, $sql);
$newres = mysqli_query($conn, $strsql);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		echo '<script>window.location.href = "loggedin.php";</script>';;
	}
	$row = mysqli_num_rows($res);
	if(!$row)
	{
		echo '<script>alert("Recheck login details!");window.location.href = "home.php";</script>';
	}
	
if($newres)
{
    while($array = mysqli_fetch_array($newres))
	{
		echo '<script>window.location.href = "insert_cart.php";</script>';;
	}
	$row = mysqli_num_rows($newres);
	if(!$row)
	{
		echo '<script>alert("Recheck login details!");window.location.href = "home.php";</script>';
	}	
}
}
?>