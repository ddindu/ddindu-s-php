<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pw = 'apmsetup';
        $dbName = 'c';
        $mysql = mysqli_connect($host, $user, $pw, $dbName); 
        $sql="select * from d";
        $result=mysqli_query($mysql,$sql);
        $field=mysqli_num_fields($result);
        $number=1;
    ?>
    <table border="1" cellpadding="10">
        <tr align="center">
        <td bgcolor="#cccc"> 번호</td>
        <td bgcolor="#cccc"> classNumber</td>
        <td bgcolor="#cccc"> name</td>
        <td bgcolor="#cccc"> phoneNumber</td>
        <td bgcolor="#cccc"> password</td></tr>
    <? while ($row=mysqli_fetch_row($result))
        {
            echo("<tr> <td>$number</td>");
                for($i=0;$i<$field;$i++)
                {
                    echo "<td>$row[$i]</td>";
                }
            $number++;
        }
    ?>
    </table>
</html>