<?php

$userName = $_POST["uName"];
$pwd = $_POST["pwd1"];
$email = $_POST["uemail"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");

echo $userName;


if ($mysqli === false)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "INSERT INTO USER 
          (UPASSWORD, UNAME, EMAIL)
          VALUES
          ('$pwd', '$userName', '$email')";

  if ($mysqli->query($query) === TRUE) {
      echo "New record created successfully";
      header("Location: userPortal.php");
  } else {
      echo "Error";
}
//header("Location: userPortal.html");
echo "TEST";

  



$mysqli->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      </head>

    <body>
        <h1 align="center">Revolutionized LEDs</h1>
        <div class="registerMain">
            <div class= "noAccountContainer">
                <form action = "createUser.php" method = "post">
                    <input class =loginText type = "text" placeholder = "Username" name = "uName"></input><br>
                    <input class =loginText type = "text" placeholder = "Password" name = "pwd1"></input><br>
                    <input class =loginText type = "text" placeholder = "E-mail Address" name = "email"></input><br>
                    <div class = regButtons>
                        <button id= "Validate">Create User</button><br>
                    </div>
                </form>
                    <div class = regButtons>
                        <button onclick="window.location.href='login.php'">Sign In</button>
                    </div>
            </div>
        </div>
    </body>


</html>
