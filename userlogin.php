<?php
include "db.php";
include "home2.php";
ob_start();
   		session_start();

//$_SESSION['email'] = $_POST['email'];

if(isset($_POST['sub2'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    /*func check if user exists*/
	
    $q = "SELECT * FROM user1 WHERE email='".$email."' && password='".$password."'";
    $result = $mysqli->query($q);
    
    if($result->num_rows == 1) { // if a row was returned, login is successful
        echo "<script>alert('Login Successful')</script>";
        

   		 		$_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['email'] = '"'.$email.'"';
                  
        header('Location: user_page.php');
    }
    else {
        echo "<script>alert('Invalid Credentials!')</script>";
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
	<h1 style="font-style: cursive;">USER LOGIN</h1>
	<form method="POST">
		
		<input type="user name" id="user name" name="email" required placeholder="Enter Email ID" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
		<input type="password" id="password" name="password" required placeholder="Enter Password" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
		<br>
		<br>
       
		<input type="submit" name="sub2" value="LOGIN" style="padding-top: 15px;padding-bottom: 15px;padding-left: 30px;padding-right: 30px;margin-left: 270px;">
	
		<a href="createaccount.php"><p style="margin-left: 250px;">Don't have account?</p></a>