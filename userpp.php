<?php
include "db.php";
include "home3.php";
session_start();

$email=$_SESSION['email'];

if(isset($_POST['update_name'])) {
    $name = $_POST['name'];
    $q = "UPDATE user1 SET name='".$name."' WHERE email='".$_POST['email']."'";
    $mysqli->query($q);
    header('Location: user_profile.php');
}

if(isset($_POST['update_mobile'])) {
    $new_mobile = $_POST['new_mobile'];
    $q = "UPDATE user1 SET mobile='".$new_mobile."' WHERE email='".$_POST['email']."'";
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
    <form method="post">
        <label for="name">Email ID: <?php echo $_SESSION['email']; ?></label>
        <?php
        $q = "SELECT * FROM user1 where email='".$email."'";
        $result = $mysqli->query($q);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<input type="text" name="name" value="'.$row['name'].'">';
            }
        }
        ?>
        <input type="hidden"  name="email" value="<?php echo $email; ?>">
<input type="submit" name="update_name" value="Update Name">
</form>

<br>

<form method="post">
    <label for="mobile">Mobile Number:</label>
    <?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<input type="number" name="new_mobile" value="'.$row['mobile'].'">';
        }
    }
    ?>
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="submit" name="update_mobile" value="Update Mobile Number">
</form>
