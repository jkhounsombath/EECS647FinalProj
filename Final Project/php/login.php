<?php
$host = "mysql.eecs.ku.edu"
$user = "t969n947@localhost"
$password = "Tryhard69!"
$db = "t969n947"

mysql_connect($host, $user, $password);
mysql_select_db($db);

if(isset(['username'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from USER where UNAME = '".$uname."' AND UPASSWORD = '".$password"'
    limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result) == 1){
        header("Location: userPortal.html");
    }else{
        echo "Wrong";
    }
}
?>
