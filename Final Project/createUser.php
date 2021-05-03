<?php
$userName = $_POST["uName"];
$pwd = $_POST["password"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$worked = true;

if ($worked == true)
{
  $query = "INSERT INTO Users
            (user_id)
            VALUES
            ('$userName')";
            if($mysqli->query($query) === true)
            {
              echo "success";
            }
            else
            {
              echo "not";
            }
}
$mysqli->close();
?>
