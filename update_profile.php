<?php
include "db.php";
include "home3.php";

if ($mysqli->connect_error) { 
  die('Connect Error (' . $mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 
session_start();


// Fetch user data
$q="SELECT * FROM user1 where email='".$_SESSION['email']."'";
$result = $mysqli->query($q);
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

// Update name
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $q = "UPDATE user1 SET name='".$name."' WHERE email='".$_SESSION['email']."'";
    $mysqli->query($q);
    header('Location: user_profile.php');
}

// Update mobile number
if(isset($_POST['mobile'])) {
    $new_mobile = $_POST['mobile'];
    $q = "UPDATE user1 SET mobile='".$new_mobile."' WHERE email='".$_SESSION['email']."'";
    $mysqli->query($q);
    header('Location: user_profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        input[readonly] {
            background-color: #F5F5F5;
        }
    </style>
    
</head>
<body>
    <h1>User Profile</h1>
    <form>
        <label for="email">Email ID:</label>
        <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" readonly>

        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" value="<?php echo $user['mobile']; ?>" readonly>
    </form>

    <form method="POST">
        <label for="new_name">Update Name:</label>
        <input type="text" id="new_name" name="name" placeholder="Enter new name">
        
        <button type="submit" name="update_name">Update Name</button>
    </form>
  
    <br>
    <form method="POST">
        <label for="new_mobile">Update Mobile Number:</label>
        <input type="text" id="new_mobile" name="new_mobile" placeholder="Enter new mobile number">
        <button type="submit" name="update_mobile">Update Mobile Number</button>
    </form>


  </form>
</body>
</html>   
