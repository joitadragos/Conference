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
    <title>Home</title>
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
        <h1 >Programul dupa care se v-a desfarsura evenimentul</h1>
    <table>
        <tr>
            <th>ziua</th><th>10:00 - 12:00</th><th>12:00 - 14:00</th><th>14:00 - 16:00</th>
        </tr>
        <tr>
            <td>1</td> <td colspan="2">Congress on Big Data</td><td rowspan="4">Perioada dedicata dialogului cu participantii</td>
        </tr>
        <tr>
            <td>2</td> <td>Conference on Cloud Computing</td><td>Prezentarea lui Brian Blake</td>
        </tr>
        <tr>
            <td>3</td> <td colspan="2">Congress on internet of Things</td>
        </tr>
        <tr>
            <td>4</td> <td colspan="2">Conference on Web Services</td>  
        </tr>
    </table>
</body>
</html>
<nav role="navigation">
    <div id="menuToggle">
      <!--
       Un checkbox fals
      -->
      <input type="checkbox" />
      
      <!--
      Scrrez liniutele pentru butonul "hamburger"
      -->
      <span></span>
      <span></span>
      <span></span>
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