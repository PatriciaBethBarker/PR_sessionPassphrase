<?php
/**
 * login.php for Session Passphrase
 * 
 * 
 * 
 *
 * @package CodeIgintor:  SMALL_PIECE_OF_PROGRAM
 * @subpackage Session Passphrase
 * @author Patricia Barker <patriciabethbarker@gmail.com>
 * @version 2.0 2015/06/15 
 * @link http://www.tcbcommercialproperties.com/sandbox/sp/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see index.php
 * @see logout.php
 * @see passwords.php
 * @todo none
 */

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
