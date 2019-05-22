<html>
<head> <meta charset="utf-8"/> </head>
<?php
    
    $host="localhost";
    $user='root';
    $pw="apmsetup";
    $dbName='c';

    $mysql=mysqli_connect($host,$user,$pw,$dbName);

    $sql = "select * from d";
    $result = mysqli_query($mysql,$sql);
    $number=1;
?>
<table border="1" cellpadding="10">
    <tr align="center">
        <td bgcolor="#cccc">classNumber</td>
        <td bgcolor="#cccc">name</td>
        <td bgcolor="#cccc">phoneNumber</td>
        <td bgcolor="#cccc">password</td>
    </tr>
    <? while($row=mysqli_fetch_array($result))
        {
            echo("<tr>
            <td>$row[classNumber]</td>
            <td>$row[name]</td>
            <td>$row[phoneNumber]</td>
            <td>$row[password]</td>
            </tr>");
            $number++;
        }
    mysqli_close($mysql);
    ?>
</html>