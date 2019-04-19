<html>
<head> <meta charset="utf-8"/> </head>
<?php
    
    $host = "localhost";
    $user = 'root';
    $pw = "apmsetup";
    $dbName = 'sqldb';

    $mysql = mysql_connect($host,$user,$pw);
    mysql_select_db($dbName,$mysql);
    $sql = "insert into 구매테이블(num,userID,prodName,category,price,amount) 
    value(13,kjs,컴퓨터,전자,100,1)";
    $result=mysql_query($sql);
    if($result){
        echo "레코드 삽입 성공";
    }else{
        echo "레코드 삽입 실패";
    }
    mysql_close($mysql) // 접속끊기
?>
</html>