<?php
define('DBSERVER', 'mysql.eecs.ku.edu');
define('DBUSERNAME', 'jkhounsombath');
define('DBPASSWORD', 'ieng9eiF');
define('DBNAME', 'jkhounsombath');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if ($db === false) {
    die("Error: connection error, " . mysqli_connect_error());
}
?>