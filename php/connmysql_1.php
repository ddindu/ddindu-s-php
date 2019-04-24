<html>
<head> <meta charset="utf-8"/> </head>
<?php
    
    $host="localhost";
    $user='root';
    $pw="apmsetup";
    $dbName='sqldb';

    $mysql=mysqli_connect($host,$user,$pw,$dbName);

    $sql="insert into 구매테이블(num,userID,prodName,category,price,amount)"; 
    $sql.="value('13','asd','0102','kse','144','155')";
    $result=mysqli_query($mysql,$sql);
    if($result){
        echo "레코드 삽입 성공";
    }else{
        echo "레코드 삽입 실패";
    }
    mysqli_close($mysql); // 접속끊기
?>
</html>