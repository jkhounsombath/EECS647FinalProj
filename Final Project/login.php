<?php
$userName = $_POST["username"];
$pwd = $_POST["password"];
$mysqli = new mysqli("sql102.epizy.com", "epiz_28547065", "J4zeP5TfSqnDVe", "epiz_28547065_revLEDS");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

if(isset(['username'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "select * from USER where UNAME = '".$uname."' AND UPASSWORD = '".$password"'
    limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result) == 1){
        header("Location: userPortal.html");
    }else{
        echo "Wrong";
    }
}





// if ($worked == true)
// {
//   $query = "INSERT INTO USER 
//             (UPASSWORD, UNAME, EMAIL)
//             VALUES
//             ('$pwd', '$userName', '$email')";
            
//   header("Location: userPortal.html");
// }
// $mysqli->close();



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
       
        <form action="php/login.php" method="post">

            <div class = "loginFieldsContainer">
                <label class = "loginText" for= "username"> USERNAME </label>
                <input type= "text"  name = "username">
                <br>
                <label class = "loginText" for= "password"> PASSWORD </label>
                <input type = "password"  name = "password">
                <br>
                <div class = "loginButtons">
                    <button type= "submit"> Login </button>
                </div>
            </div>
        </form>
                <div class = "loginButtons">
                    <button onclick="window.location.href='createUser.html'"> Register </button>
                </div>
                
            
        
        
    </div>

       
  </body>


</html>


