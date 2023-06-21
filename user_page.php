<?php
include "db.php";
include "home3.php";


?>
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
    <style>
      body {
        background-color: brown;
        color: #fff;
        font-family: Arial, sans-serif;
      }
      h1 {
        font-size: 3em;
        margin-top: 50px;
        text-align: center;
        text-transform: uppercase;
      }
      p {
        font-size: 1.5em;
        margin-top: 50px;
        text-align: center;
      }
      ul {
        list-style: none;
        margin-top: 50px;
        padding: 0;
        text-align: center;
      }
      li {
        margin-bottom: 20px;
      }
      a {
        color: #fff;
        text-decoration: none;
        font-size: 2em;
      }
      a:hover {
        color: #ffc107;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to your Dashboard</h1>
    <p>Please select an option below:</p>
    <ul>
      <li><a href="update_profile.php">Update Profile</a></li>
      <li><a href="add_event.php">Add Event</a></li>
    </ul>
  </body>
</html> -->
<!DOCTYPE html>
<html>
  <head>
    <title>User Dashboard</title>
    <style>
      body {
        background-color: #f2f2f2;
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
       body {
    background-color: brown;
  }
    </style>
  </head>
  <body>
    <h1>Welcome to your Dashboard</h1>
    <ul>
      
      <li><a href="venue1.php">Book Venue</a></li>
    </ul>
 
    <div class="resort-section">
      <div class="resort">
        <img src="images\1.jpg">
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
