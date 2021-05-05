<?php

$userName = $_POST["uName"];
$pwd = $_POST["pwd1"];
$email = $_POST["uemail"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");

echo $userName;


if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}else{

  $query = "INSERT INTO USER 
            (UPASSWORD, UNAME, EMAIL)
            VALUES
            ('$pwd', '$userName', '$email')";

  //header("Location: userPortal.html");
  echo "TEST";
}
  

if ($mysql->query($query) === TRUE) {
  echo "New record created successfully";
  header("Location: userPortal.html");
} else {
  echo "Error";
}

$mysqli->close();
?>


