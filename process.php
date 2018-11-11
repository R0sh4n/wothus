<?php
/* Get values from loginphp form */
$username = $_POST['user'];
$pass = $_POST['pass'];
 
/* connect to server and select database */
mysql_connect("localhost", "wothuzdv_Wothus", "r05h4nw0thu5");
mysql_select_db("wothuzdv_login");
 
// Query the database for users where
$result = mysql_query("select * from users where username = '$username' and pass = '$pass'")
or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['pass'] == $pass )
{
echo "Login Success !! Welcome ".$row['username'];
} else { 
echo "Failed";
}
?>
