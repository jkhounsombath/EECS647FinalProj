<?php


// $userName = $_POST["username"];
// $pwd = $_POST["password"];
// $mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");

require_once "config.php";
require_once "session.php";


$query = $db->prepare("SELECT * FROM USER
WHERE UNAME = '$userName'");

$query2 = $db->prepare("SELECT * FROM USER
WHERE UPASSWORD = '$pwd'");

$query->execute();
$query2->execute();
$row = $query->fetch();
if(mysqli_num_rows($mysqli->query($query)) > 0)
{
    if(mysqli_num_rows($mysqli->query($query2)) > 0)
    {
        $_SESSION["userid"] = $row['ID'];
        $_SESSION["user"] = $row;
        header("location: userPortal.php");
        exit;
    } else {
        echo ("incorrect password");
    }
} else {
echo ("Incorrect username");
}
$query->close();


mysqli_close($db);

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  
  <body>

    <h1 align="center">Revolutionized LEDs</h1>
    <div class="loginMain">
       
        <form action="login.php" method="post">

            <div class = "loginFieldsContainer">
                <label class = "loginText" for= "username"> USERNAME </label>
                <input type= "text"  name = "username" required>
                <br>
                <label class = "loginText" for= "password"> PASSWORD </label>
                <input type = "password"  name = "password" required>
                <br>
                <div class = "loginButtons">
                    <button type= "submit"> Login </button>
                </div>
            </div>
        </form>
                <div class = "loginButtons">
                    <button onclick="window.location.href='createUser.php'"> Register </button>
                </div>
                
            
        
        
    </div>

       
  </body>


</html>
