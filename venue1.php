<?php
include "home3.php";
include "db.php";

if ($mysqli->connect_error) { 
    die('Connect Error (' . $mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 
session_start();
if(isset($_POST['submit'])){

    $d=$_POST['d'];
    $t=$_POST['t'];
    $d2=$_POST['d2'];
    $t2=$_POST['t2'];

    $email = $_SESSION['email'];
    $location=$_POST['location'];
    $event=$_POST['event'];

    $now = date("Y-m-d");
    
    if ($d < $now || $d2 <$now) {
        echo "<script>alert('Invalid date, Please re-enter the reporting Form!')</script>";   
    } else {

        // check if selected date is already booked
        $check_query = "SELECT * FROM venue1 WHERE location = '$location' AND ((stDate <= '$d' AND enDate >= '$d') OR (stDate <= '$d2' AND enDate >= '$d2'))";
        $check_result = $mysqli->query($check_query);

        if ($check_result->num_rows > 0) {
            // date is already booked
            echo "<script>alert('This date is already booked. Please select another date.')</script>";
        } else {
            // date is available, proceed with booking
            $w = "INSERT INTO venue1(email,location,stDate,sTime,enDate,eTime,eventType)values ('".$email."','".$location."','".$d."','".$t."','".$d2."','".$t2."','".$event."') "; 

            if($w==true) {
                echo "<script>alert('Data added Successfully')</script>";
                header('Location:view.php');
            } else {
                echo "<script>alert('Add Valid Data')</script>";
            }

            $result = $mysqli->query($w);
        }
    }
}
?>
<style>
h1{
    margin-left: 250px;
}
form {
            background-color: white;
            padding: 20px;
            margin-top: 50px;
            margin-left: 300px;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        body {
            background-color: brown;
        }
</style>
<html>
<form method="POST">
    <div class="head">
    <h1>
        BOOK VENUE
    </h1>
</div>

<div>
   <!--  <input type="email" name="email" required placeholder="Email ID"  style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;">
<br><br> -->

<select name="location" class="required" id="st0" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px; background-color: #e6e6fa;margin-left: 230px;" required>
        <option >--Select Location--</option>
        <option >AN Resort Mumbai</option>
        <option >AN Resort Pune</option>
        <option >AN Resort Nasik</option>
        <option >AN Resort Lonavala</option>
        <option >AN Resort Aurabgabad</option>
        
        
        </select>
        <br>
        <p style="margin-left: 230px;">Start Date:<br><br>
        <input type="date" name="d"  required style="padding-top: 10px;padding-bottom: 10px;padding-left: 35px;padding-right: 35px; background-color: #e6e6fa;margin-left: 3px;">

    <input type="time" name="t"  required style="padding-top: 10px;padding-bottom: 10px;padding-left: 35px;padding-right: 35px; background-color: #e6e6fa;margin-left: 5px;"><br><br>

    <p style="margin-left: 230px;">End Date:</p>
        <input type="date" name="d2"  required style="padding-top: 10px;padding-bottom: 10px;padding-left: 35px;padding-right: 35px; background-color: #e6e6fa;margin-left: 230px;">

        <input type="time" name="t2"  required style="padding-top: 10px;padding-bottom: 10px;padding-left: 35px;padding-right: 35px; background-color: #e6e6fa;margin-left: 5px;"><br><br>

<select name="event" class="required" id="st1" style="padding-top: 10px;padding-bottom: 10px;padding-left: 40px;padding-right: 40px; background-color: #e6e6fa;margin-left: 230px;" required>
        <option >--Select Event--</option>
        <option >Birthday</option>
        <option >Marriage</option>
        <option >Reception</option>
        <option >Engagement</option>
        <option >Party</option>
        
        
        </select>
        <br><br>
<br>
        <input type="submit" name="submit" value="PROCEED " style="padding-top: 15px;padding-bottom: 15px;padding-left: 30px;padding-right: 30px;margin-left: 250px;background-color: brown;color: white;">
    </div>
</form>
</html>