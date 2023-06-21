<!-- <?php
//include "db";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: brown;
        }
        .index{
            background-color: white;
			padding: 20px;
			margin-top: 50px;
			margin-left: 300px;
			width: 50%;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }
        .line{
            font-size: 125%;
            width: 100%;
			padding: 20px;
			border-radius: 12px;
			border-color: black;
			margin-bottom: 20px;
			box-sizing: border-box;
            text-align: center;
        }
        button{
            background-color: brown;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-left: 100px;
            /* align-items: center; */
            /* text-align: center; */
        }

        </style>
</head>
<body>
    <div class="index">
        <div class="line">
            <button>customer details </button>
        </div>
        <div class="line">
            <button>upcoming events </button>
        </div>
        <div class="line">
            <button>events till date </button>
        </div>
        <div class="line">
            <button>edit event details </button>
        </div>
    </div>
</body>
</html>





 -->
<!-- 
<?php
// include "db";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #F5F5F5;
            font-family: Arial, sans-serif;
        }

        .index {
            background-color: white;
            margin: 50px auto;
            width: 50%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        .line {
            font-size: 125%;
            width: 100%;
            padding: 20px;
            border-radius: 12px;
            border: 2px solid black;
            margin-bottom: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        button {
            background-color: brown;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 100px;
        }

        button:hover {
            background-color: #8B4513;
        }
    </style>
</head>
<body>
    <div class="index">
        <div class="line">
            <button>Customer Details</button>
        </div>
        <div class="line">
            <button>Upcoming Events</button>
        </div>
        <div class="line">
            <button>Events Till Date</button>
        </div>
        <div class="line">
            <button>Edit Event Details</button>
        </div>
    </div>
</body>
</html>
 -->



 <?php
include "db.php";
include "home3.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
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

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
            text-align: center;
        }

        li {
            display: inline-block;
            padding: 10px;
            margin: 10px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111111;
        }

        .resort-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 50px;
      }

      .resort {
        width: 300px;
        height: 200px;
        margin: 20px;
        overflow: hidden;
        position: relative;
      }

      .resort img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .resort-name {
        position: absolute;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        width: 100%;
        text-align: center;
        padding: 10px;
      }

      .scrolling-images {
        margin-top: 50px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .scrolling-image {
        width: 200px;
        height: 200px;
        margin: 20px;
        overflow: hidden;
      }

      .scrolling-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

        .index {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .line {
            width: 300px;
            height: 100px;
            margin: 20px;
            padding: 20px;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
            text-align: center;
        }

        button {
            background-color: brown;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Welcome to your Dashboard</h1>
<ul>
    <li><a href="coustomer_details.php">Customer Details</a></li>
    
    <li><a href="bookings.php">Venue Bookings</a></li>
</ul>
    <div class="resort-section">
      <div class="resort">
        <img src="images\1.jpg" alt="AN Resort Mumbai">
        <div class="resort-name">AN Resort Mumbai</div>
      </div>
      <div class="resort">
        <img src="images\2.jpg" alt="AN Resort Pune">
        <div class="resort-name">AN Resort Pune</div>
      </div>
      <div class="resort">
        <img src="images\3.jpg" alt="AN Resort Nasik">
        <div class="resort-name">AN Resort Nasik</div>
      </div>
      <div class="resort">
        <img src="images\4.jpg" alt="AN Resort Lonavala">
        <div class="resort-name">AN Resort Lonavala</div>
      </div>
      <div class="resort">
        <img src="images\5.jpg" alt="AN Resort Aurangabad">
        <div class="resort-name">AN Resort Aurangabad</div>
</div>
</div>
</body>
</html>
