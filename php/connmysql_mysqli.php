<html>
<head> <meta charset="utf-8"/> </head>
<?php
    
    $host = "localhost";
    $user = 'root';
    $pw = "apmsetup";
    $dbName = 'sqldb';

    $mysqli = new mysqli($host,$user,$pw,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    } //check connection
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
    $mysqli -> close(); //접속끊기
?>
</html>