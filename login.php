<?php
  include('passwords.php');
  session_start(); //Start session
    $_SESSION["password"] = $_POST["password"]; //if what was entered has a value - is it equal to the session
?>

<?php
  if($_SESSION["password"] == $password) { //password is correct
?>

  <h1>Welcome!</h1>

  <p><a href="logout.php">Log out</a></p>
  
<?php
  }else { //password is incorrect
    $error = "Username or Password is incorrect";
?>
  
<p>Password is invalid. Return to <a href="index.php">Log in page and try again!</a></p>

<?php
  }
?>
