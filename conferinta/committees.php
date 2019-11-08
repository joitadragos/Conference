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
        <h1>Organizatorii acestei conferinte sunt urmatorii:</h1>
        <h3><b><i>Steering Committee Chair:</i> </b></h3>
          <p><strong>&nbsp;&nbsp;Yannis Manolopoulos,</strong>&nbsp;Aristotle University</p><br>
        <h3><b><i>Conference General Chairperson:</i></b></h3>
            <p><strong>George Eleftherakis,</strong>he University of Sheffield International Faculty, Greece</p>
            <p><strong>Milena Lazarova,</strong>Technical University of Sofia, Bulgaria</p><br>
        <h3><b><i>Steering Committee Members</i></b></h3>
        <table >
                <tr>
                    <th>Nume Prenume </th> <th>Universitatea pe care o reprezinta </th> <th>Tara</th>
                </tr>
                <tr>
                    <td>Betim Cico</td> <td>"EPOKA" University </td><td>Albania</td>
                </tr>
                <tr>
                    <td>Costin Bădică</td> <td>University of Craiova</td> <td> Romania</td>
                </tr>
                <tr>
                    <td>George Evangelidis</td> <td>University of Thessaloniki </td> <td>Greece</td>
                </tr>
                <tr>
                    <td>Roumen Nikolov</td> <td>University of Library Studies and Information Technologies</td> <td>Bulgariab</td>
                </tr>
        </table>
        <h3><b><i>Organizing Committee</i></b></h3>
        <table>
                <tr>
                    <th>Nume Prenume </th> <th>Universitatea pe care o reprezinta </th> <th>Tara</th>
                </tr>
                <tr>
                    <td>Daniela Minkovska</td> <td>Technical University of Sofia </td><td>Bulgaria</td>
                </tr>
                <tr>
                    <td>Georgy Zapryanov</td> <td>Technical University of Sofia</td> <td> Bulgaria</td>
                </tr>
                <tr>
                    <td>Iva Nikolova</td> <td>Technical University of Sofia </td> <td>Bulgaria</td>
                </tr>
                <tr>
                    <td>Lyudmila Stoyanova</td> <td>Technical University of Sofia</td> <td>Bulgaria</td>
                </tr>
                <tr>
                     <td>Virginia Dimitrova</td> <td>Technical University of Sofia</td> <td>Bulgaria</td>
                </tr>
        </table>
        <h3><b><i>Program Committee Members</i></b></h3>
        <table>
                <tr>
                    <th>Nume Prenume </th> <th>Universitatea pe care o reprezinta </th> <th>Tara</th>
                </tr>
                <tr>
                    <td>Adelina Aleksievaa</td> <td>Technical University of Sofia </td><td>Bulgaria</td>
                </tr>
                <tr>
                    <td>Adrian Groza</td> <td>Technical University of Cluj-Napoca</td> <td> Romania</td>
                </tr>
                <tr>
                    <td>Adrian Iftene</td> <td>Alexandru Ioan Cuza University of Iaşi, </td> <td>Romania</td>
                </tr>
                <tr>
                    <td>Ana Proykova</td> <td>Technical University of Sofia</td> <td>Bulgaria</td>
                </tr>
                <tr>
                     <td>Bekim Fetaji</td> <td>South East European University</td> <td>North Macedonia</td>
                </tr>
                <tr>
                     <td>Christos K. Georgiadis</td> <td>University of Thessaloniki </td><td>Greece</td>
                </tr>
                <tr>
                     <td>Cvetana Krsteva</td> <td> University of Belgrade </td><td>Serbia</td>
                </tr>
                <tr>
                     <td>Damir Kalpic</td> <td>University of Zagreb </td><td>Croatia</td>
                </tr>
                <tr>
                     <td>Dana Simian</td> <td>Lucian Blaga University of Sibiu </td><td>Romania</td>
                </tr>
        </table>
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