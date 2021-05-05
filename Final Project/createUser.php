<?php
$userName = $_POST["uName"];
$pwd = $_POST["pwd1"];
$email = $_POST["email"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$worked = true;

if ($worked == true)
{
  $query = "INSERT INTO USER 
            (UPASSWORD, UNAME, EMAIL)
            VALUES
            ('$pwd', '$userName', '$email')";
}
$mysqli->close();
?>
