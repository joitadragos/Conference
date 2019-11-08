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
    <title>Call for Papers</title>
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
    <h1>Balkan Conference in Informatics </h1>
    <p> Cea de a 2-a Conferinta Balcanica in informatica (BCII 2019) v-a avea loc acest an in Craiova.</p>
    <p> Universitatea din Craiova, v-a avea deosebita placere de a gazdui acest eveniment dedicat persoanelor pasionate de tehnologie si programare</p>
    <h2> Obiectivul principal</h2>
    <p>Obiectivul principal al BCII este acela de a prezenta noi tehnologii si de a permite participantilor sa discute,sa colaboreze cu oamenii de stiinta, sa aprofundeze, sa puna intrebari. Este foarte important pentru noi sa fie prezente cat mai multe persoane, astfel putem aprofunda o gama variata de elemente, v-or fii mai multe pareri, mai multe opinii iar astfel vom putea vedea mai multe puncte de vedere si parerile fiecarui participantilo
        Incurajam toate categoriile de varsta sa vina la acest eveniment, oricine este binevenit pentru a vedea ce este nou in tehnologie. Conferinta este alcatuite din mai multe sesiuni obisnuite de detalii tehnice si prezentari practice care vor fii prezentate de oamenii de stiinta care le-au dezvoltat si care in continuare lucreaza la acestea. Fiecare prezentare v-a fii urmata de o sesiune de intrebari, intrebari pe care oamenii de stiinta
        sunt nerabdatori sa le auda si sa raspunda la acestea.Conferinta v-a acoperii toate aspectele tehnologice incepand cu partea de hardware si continuand cu software. Contine numeroare systeme si retele informatice, de asemenea si Internet of Things, tehnologii pentru inteligenta artificiala, algoritmi de invatare care se adreseaza unor cerinte critice cum ar fii performanta, securitatea, dependabilitatea, uzabilitatea,operarea, eficienta.
    </p>
    <h2> Subiecte de Interes</h2>
    
        <STRONG>1.CONGRESS ON BIG DATA</STRONG><br>
        <STRONG>2.CONFERECE ON CLOUD COMPUTING</STRONG><br>
        <STRONG>3.CONGRESS ON INTERNET OF THINGS</STRONG><br>
        <STRONG>4.CONFERENCE ON WEB SEwRVICES</STRONG><br>
        <br><br>
    <h3> ZIUA 1</h3>
   <h3>Persoane prezente la: CONGRESS ON BIG DATA </h3>
    <table >
        <tr>
            <th>Pozitia ocupata</th> <th>Numele</th> <th>Reprezinta</th>
        </tr>
        <tr>
            <td>Honorary General Chair</td> <td> Ernesto Damiani </td><td>Universita' degli Studi di Milano, Italy </td>
        </tr>
        <tr>
            <td>General Chair</td> <td>Laurence T. Yang</td> <td>St. Francis Xavier University</td>
        </tr>
        <tr>
            <td>Program Chair</td> <td>Beth Plale</td> <td>Indiana University</td>
        </tr>
        <tr>
            <td>Program Co-chair</td> <td>Sean Wang</td> <td>Fudan University</td>
        </tr>
    </table>
    <h3>ZIUA 2</h3>
   <h3>Persoane prezente la:CONFERECE ON CLOUD COMPUTING </h3>
   <table >
        <tr>
            <th>Pozitia ocupata</th> <th>Numele</th> <th>Reprezinta</th>
        </tr>
        <tr>
            <td>General Chair</td> <td> Geoffrey C. Fox </td><td>Indiana University</td>
        </tr>
        <tr>
            <td>General Co-chair</td> <td>Frank Leymann</td> <td> University of Stuttgarty</td>
        </tr>
        <tr>
            <td>Program Chair</td> <td> Claudio Ardagna</td> <td> University of Milan</td>
        </tr>
        <tr>
            <td>Program Co-chair</td> <td>Murat Kantarcioglu</td> <td>University of Texas at Dallas</td>
        </tr>
    </table>
    <h3>ZIUA 3</h3>
    <h3>Persoane prezente la:CONGRESS ON INTERNET OF THINGS </h3>
   <table >
        <tr>
            <th>Pozitia ocupata</th> <th>Numele</th> <th>Reprezinta</th>
        </tr>
        <tr>
            <td>General Chair</td> <td> Schahram Dustdar</td><td>Vienna University of Technology</td>
        </tr>
        <tr>
            <td>General Co-chair</td> <td>Manish Parashar</td> <td>National Science Foundation</td>
        </tr>
        <tr>
            <td>Program Chair</td> <td> Surya Nepal</td> <td> CSIRO</td>
        </tr>
        <tr>
            <td>Program Co-chair</td> <td>DongSeong Kim</td> <td> University of Cateerbury</td>
        </tr>
    </table>
    <h3>ZIUA 4</h3>
    <h3>Persoane prezente la:CONFERENCE ON WEB SERVICES </h3>
   <table >
        <tr>
            <th>Pozitia ocupata</th> <th>Numele</th> <th>Reprezinta</th>
        </tr>
        <tr>
            <td>General Chair</td> <td> Heiko Ludwig</td><td>IBM Research</td>
        </tr>
        <tr>
            <td>General Co-chair</td> <td>Bhavani Thuraisingham</td> <td>University of Texas at Dallas</td>
        </tr>
        <tr>
            <td>Program Chair</td> <td>Elena Ferrari</td> <td> University of Insubria</td>
        </tr>
        <tr>
            <td>Program Co-chair</td> <td>Jia Zhang</td> <td> Carnegie Mellon University </td>
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