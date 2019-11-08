<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php">Reset Your Password</a>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>
    <header>
        <h2><a href="index.html">Balkan Conference in Informatics</a></h2>
      </header>
    <h2>University of Craiova</h2>
    <h2>Computers and Information Technology Department</h2>
    <h3>Pentru orice informatii ne puteti contacta la adresa:</h3>
    <h4>balkanconference@contact.ro</h4>
    <h3>Nu ezitati sa ne contactati la unul dintre numerele:</h3>
    <h4>0358 599 &nbsp;&nbsp; 0249 322 &nbsp;&nbsp; 031 828 3333</h4>
    <p align="left">
           Adresa la care se desfasoara evenimentul:<br><br> &nbsp;<a href="https://www.google.com/maps/place/Bulevardul+Decebal+107,+Craiova/@44.3088094,23.8329524,17z/data=!3m1!4b1!4m5!3m4!1s0x4752d657616fc733:0xaa1b79efd73b7781!8m2!3d44.3088056!4d23.8351411"> Blvd.Decebal 107 Craiova, Romania</a>
           <div class="outer-div"><div class="inner-div"></div></div>
    </p>
</body>
</html>
<nav role="navigation">
    <div id="menuToggle">
      <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
      <input type="checkbox" />
      
      <!--
      Some spans to act as a hamburger.
      
      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
      <span></span>
      <span></span>
      <span></span>
      
      <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
      <ul id="menu">
        <a href="home.php"><li>Home</li></a>
        <a href="CallforPapers.php"><li>Call for Paper</li></a>
        <a href="committees.php"><li>Committeess</li></a>
        <a href="news.php"><li>News</li></a>
        <a href="participants.php"><li>Participants</li></a>
        <a href="program.php"><li>Program</li></a>
        <a href="contact.php"><li>Contact</li></a>
      </ul>
    </div>
  </nav>