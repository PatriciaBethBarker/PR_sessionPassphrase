<?php
	SESSION_start();
//this goes in front of every session 
//the php must be the first code on the page or will not work
//the passwords.php has to be first to allow the access
//include("passwords.php");
//params: server, username, password, database - gitignore keeps it secret
//you want to keep things off your source code…so do not put them here
// create passwords.php
?>
<?php
//with key-value pairs 
//session_register("password");
//echo statements check the value of the double quoted name variable
//if you leave off the method in the form it becomes a GET
?>
<!DOCTYPE html>
<html>
	<body>
        <form action="login.php" method="POST">
	<table>
		<tr>
			<td><label for="password"> Password: </label></td>
			<td><input placeholder="Password" name="password" type="text" /></td>
		</tr>
		<tr>
			<td><label for="submit"> Submit: </label></td>
			<td><input type="Submit" /></td>
		</tr>   
	</table>
		</form>            

    <h1>Welcome!</h1>
  <p>This is our flow chart <a href="http://www.tcbcommercialproperties.com/sandbox/sp/flowchart.png">A3: Session Passphrase</a>

    	</body>
</html>
