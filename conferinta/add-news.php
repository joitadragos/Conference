<?php
require_once "config.php";

$nume_p ="";
$nume_p_err ="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["nume_p"]))){
        $nume_p_p_err = "Please enter content.";     
    } elseif(strlen(trim($_POST["nume_p"])) < 13){
        $nume_p_err = "Name must have atleast 13 characters.";
    } else{
        $nume_p = trim($_POST["nume_p"]);
    }
    if(empty($nume_p_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO anunt (nume_p) VALUES (?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nume_p);
            
            // Set parameters
            $param_nume_p = $nume_p;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: news.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add news</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h2><a href="welcome.php">Balkan Conference in Informatics</a></h2>
      </header>
      <article>
      <p>
          The main objective of the BCI series of conferences is to provide a forum for discussions and dissemination of research accomplishments in Computer Science and Information Technology and to promote interaction and collaboration among scientists from the Balkan countries and the rest of the world, and to encourage involvement of young researchers from the region.<br>
          The conference will consist of regular sessions with technical contributions (regular papers) reviewed and selected by an international program committee, as well as of invited talks presented by leading scientists. Different workshops will be held in line with the main conference.
      </p>
    </article>
    <div class="wrapper">
        <h2>Add News</h2>
        <p>Please fill this form to add news.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           
            <div class="form-group <?php echo (!empty($nume_err)) ? 'has-error' : ''; ?>">
                <label>Adauga continut: </label>
                <input type="text" name="nume_p" class="form-control" value="<?php echo $nume_p; ?>">
                <span class="help-block"><?php echo $nume_p_err; ?></span>
            </div>
           

            <div class="form-group">
                <input type="submit" class="btn" value="Submit">
                <input type="reset" class="btn" value="Reset">
            </div> 
         </div>
    <footer>
        <img src="imagini\bit.png" alt="bitdefender" class="imgfooter"> &nbsp;
        <img src="imagini\intel.jpg" alt="intel" class="imgfooter">
        <img src="imagini\ucv.jpg" alt="Universitatea din Craiova" class="imgfooter">
    </footer>   
</body>
</html>