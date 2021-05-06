<?php



require_once "config.php";
require_once "session.php";




if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $userName = trim($_POST['username']);
    $pwd = trim($_POST['password']);

    if ($stmt = $db->prepare("SELECT ID, UNAME, UPASSWORD FROM USER WHERE UNAME = '$userName'")) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST[$userName]);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();



        echo ($stmt->num_rows);

        if ($stmt->num_rows > 0) {

            $stmt->bind_result($uid, $un, $pw);
            $stmt->fetch();
            echo $pwd;
            echo $pw;
            echo $uid;
            if ($pwd === $pw) {
                $_SESSION["userid"] = $uid;
                $_SESSION['loggedin'] = TRUE;
                header("Location: userPortal.php");
                exit;
            } else {
                // Incorrect password
                echo 'incorrect pass';
            }
        } else {
            // Incorrect username
            echo 'incorrect user';
        }

        $stmt->close();
    }
}









// require_once "config.php";
// require_once "session.php";

// if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

//     $userName = trim($_POST['username']);
//     $pwd = trim($_POST['password']);

//     $query = $db->prepare(
//             "SELECT * FROM USER
//             WHERE UNAME = '$userName'");

//     $query->execute();
//     $query->store_result();
//     $row = $query->fetch();
//     echo ($query->num_rows);
//     if($query->num_rows > 0) {
//         echo "Hello world";
        // $_SESSION["userid"] = $row['ID'];
        // $_SESSION["user"] = $row;

//         header("location: userPortal.php");
//         exit;
//     }
//     echo "Hello World";


//     $query->close();


//     mysqli_close($db);
// }
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
                    <button type= "submit" name = "submit"> Login </button>
                </div>
            </div>
        </form>
                <div class = "loginButtons">
                    <button onclick="window.location.href='createUser.php'"> Register </button>
                </div>
                
            
        
        
    </div>

       
  </body>


</html>
