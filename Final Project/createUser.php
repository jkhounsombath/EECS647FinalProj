<?php
require_once "config.php";
require_once "session.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $userName = $_POST["uName"];
  $pwd = $_POST["pwd1"];
  $email = $_POST["uemail"];


  $query = $db->prepare(
            "INSERT INTO USER 
            (UPASSWORD, UNAME, EMAIL)
            VALUES
            ('$pwd', '$userName', '$email')");

  $insertQuery = $query->execute();
  if($inserQuery) {
    echo "worked";
  } else {
    echo "did not work";
  }

}
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
                <form action = "" method = "post">
                    <input class =loginText type = "text" placeholder = "Username" name = "uName" required></input><br>
                    <input class =loginText type = "text" placeholder = "Password" name = "pwd1" required></input><br>
                    <input class =loginText type = "text" placeholder = "E-mail Address" name = "email"></input><br>
                    <div class = regButtons>
                        <input type = 'submit' name='submit' id= "Validate">Create User</button><br>
                    </div>
                </form>
                    <div class = regButtons>
                        <p>Already have account?</p>
                        <button onclick="window.location.href='login.php'">Sign In</button>
                    </div>
            </div>
        </div>
    </body>


</html>
