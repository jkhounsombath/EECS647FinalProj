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








