<?php
$userName = $_POST["uName"];
$pwd = $_POST["pwd1"];
$email = $_POST["uemail"];
$id = mt_rand(100000, 999999);
$mysqli = new mysqli("sql102.epizy.com", "epiz_28547065", "J4zeP5TfSqnDVe", "epiz_28547065_revLEDS");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$worked = true;

if ($worked == true)
{
  $query = "INSERT INTO USER 
            (ID, UNAME, UPASSWORD, EMAIL)
            VALUES
            ('$id', '$userName', '$pwd', '$email')";

  header("Location: userPortal.html");
}
$mysqli->close();
?>
