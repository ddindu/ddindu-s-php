<html>
<head> <meta charset="utf-8"/> </head>
<?php
    
    $host = "localhost";
    $user = 'root';
    $pw = "apmsetup";
    $dbName = 'sqldb';

    $mysql = mysql_connect($host,$user,$pw,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    } //check connection
    if($mysql){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
    mysql_close($mysql) // 접속끊기
?>
</html>