<?php
// Include config file
include "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $nume = $prenume= "";
$username_err = $password_err = $confirm_password_err = $nume_err = $prenume_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    //Validate name
    if(empty(trim($_POST["nume"]))){
        $nume_err = "Please enter a name.";     
    } elseif(strlen(trim($_POST["nume"])) < 3){
        $nume_err = "Name must have atleast 3 characters.";
    } else{
        $nume = trim($_POST["nume"]);
    }
    

    //validate lastname
    if(empty(trim($_POST["prenume"]))){
        $prenume_err = "Please enter a last name.";     
    } elseif(strlen(trim($_POST["prenume"])) < 3){
        $prenume_err = "LastName must have atleast 3 characters.";
    } else{
        $prenume = trim($_POST["prenume"]);
    }
    

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($nume_err) && empty($prenume_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, nume, prenume) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password,$param_nume,$param_prenume);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_nume=$nume;
            $param_prenume=$prenume;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h2><a href="welcome.php">Balkan Conference in Informatics</a></h2>
      </header>
      <article>
      <p>
          Aici iti poti creea un cont de utilizator.
      </p>
    </article>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($nume_err)) ? 'has-error' : ''; ?>">
                <label>Nume</label>
                <input type="text" name="nume" class="form-control" value="<?php echo $nume; ?>">
                <span class="help-block"><?php echo $nume_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($prenume_err)) ? 'has-error' : ''; ?>">
                <label>Prenume</label>
                <input type="text" name="prenume" class="form-control" value="<?php echo $prenume; ?>">
                <span class="help-block"><?php echo $prenume_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn" value="Submit">
                <input type="reset" class="btn" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div> 
    <footer>
        <img src="imagini\bit.png" alt="bitdefender" class="imgfooter"> &nbsp;
        <img src="imagini\intel.jpg" alt="intel" class="imgfooter">
        <img src="imagini\ucv.jpg" alt="Universitatea din Craiova" class="imgfooter">
    </footer>   
</body>
</html>