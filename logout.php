<?php
/**
 * logout.php for Session Passphrase
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
 * @see login.php
 * @see index.php
 * @see passwords.php
 * @todo none
 */
<<<<<<< HEAD
 
=======

>>>>>>> 6cdfc46ec4a7c79875748f686a359395337d6d36
  session_start();
    $_SESSION = array();
    
  session_unset();
    header("Location: index.php");
?>
