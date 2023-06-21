<?php
include "db.php";
include "home2.php";

if(isset($_POST['sub']))
{
	$name=$_POST['name'];  /*retrieve data from form and sends to server*/
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];

	if($password!=$password2)
	{
		echo "<script>alert('Password doesnt match!')</script>";
		
	}
	else
	{
		$q="INSERT INTO user1(name,email,password,mobile) VALUES('".$name."','".$email."','".$password."','".$mobile."')";
		$result=$mysqli->query($q);
		echo "<script>alert('Data added Successfully')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body {
			background-color: brown;
		}
		h1 {
			color: white;
			text-align: center;
			margin-top: 50px;
		}
		form {
			background-color: white;
			padding: 20px;
			margin: 0 auto;
			width: 50%;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"], input[type="number"], select {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: brown;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #8B4513;
		}
	</style>
</head>
<body>
	<h1>SIGN-UP</h1>
	<form method="POST">
		
		<input type="name" id="name" name="name" required placeholder="Enter Full Name" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">

		<br>
		<br>
		<input type="email" id="email" name="email" required placeholder="Enter Valid Email ID" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
		<input type="name" id="mobile" name="mobile" required placeholder="Enter Contact Number" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
		<input type="password" id="password" name="password" required placeholder="Enter Password" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
		<input type="password" id="password" name="password2" required placeholder="Confirm Password" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
		<input type="submit" name="sub" value="REGISTER" style="padding-top: 15px;padding-bottom: 15px;padding-left: 30px;padding-right: 30px;margin-left: 270px;">
		<br>
		<br>
		<a href="userlogin.php"><p style="margin-left: 250px;">Already have account?</p></a>

       
        