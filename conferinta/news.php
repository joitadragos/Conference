<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"])){
    header("location: login.php");
    exit;
}
include "config.php";
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
       <h2><a href="welcome.php">Balkan Conference in Informatics</a></h2>
      </header>
      <article>
      <p>
          The main objective of the BCI series of conferences is to provide a forum for discussions and dissemination of research accomplishments in Computer Science and Information Technology and to promote interaction and collaboration among scientists from the Balkan countries and the rest of the world, and to encourage involvement of young researchers from the region.<br>
          The conference will consist of regular sessions with technical contributions (regular papers) reviewed and selected by an international program committee, as well as of invited talks presented by leading scientists. Different workshops will be held in line with the main conference.
      </p>
    </article>
<?php
 //afisarea participantilor
 $query = "SELECT * FROM anunt";
 $result = mysqli_query($link, $query);
 
 if(mysqli_num_rows($result)) {
    print("<table border='1' cellspacing='0'>\n");
    print("<tr><th>Adaugat la data</th><th width='70%'>informatii</th>\n");
    while($row = mysqli_fetch_array($result)){
      print("<tr>\n");
      print("<td>" . $row['added_at']. "</td>\n");
      print("<td>" . $row['nume_p']. "</td>\n");
      print("</tr>\n");
    }
    print("</table>");
  } else {
    print "Nu exista date in news!";
  }
 ?>
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