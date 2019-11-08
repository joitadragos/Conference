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
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php">Reset Your Password</a>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>
    <header>
        <h2>Admin Page</h2>
      </header>
      <article>
      <p>
          Ca admin poti adauga, edita sau sterge participanti si articole.Alege din meniu ce vrei sa faci
      </p>
    </article>
    <footer>
        <img src="imagini\bit.png" alt="bitdefender" class="imgfooter"> &nbsp;
        <img src="imagini\intel.jpg" alt="intel" class="imgfooter">
        <img src="imagini\ucv.jpg" alt="Universitatea din Craiova" class="imgfooter">
    </footer>
</body>
</html>
<nav role="navigation">
    <div id="menuToggle">
      <!--
      Un checkbox fals, cca sa pot pune un cecked selector pe el
      -->
      <input type="checkbox" />
      
      <!--
        Mai jos am creeat liniutele pentru butonul "hamburger"
      -->
      <span></span>
      <span></span>
      <span></span>
      
      <ul id="menu">
        <a href="add-news.php"><li>Add news</li></a>
      </ul>
    </div>
  </nav>