<?php
    $link = mysqli_connect("localhost","root","apmsetup","Humaninfo");
    if(!$link){
        echo "MySQL 접속 에러 : ";
        echo mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($link,"utf8");
    $sql = "SELECT * FROM humaninfo";
    $result = mysqli_query($link,$sql);
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <style type = "text/css">
                td {border:1px solid #333;padding:10px;}
            </style>
            <meta http-equiv = "X-UA-Compatible" content="IE=edge"/>
                <title>Page Title</title>
                <meta name = "viewport"
                    content="width = device-width, initial-scale=1"/>
                <link rel = "stylesheet" type="text/css"
                    media="screen" href="main.css"/>
                    <script src = "main.js"></script>
        </head>
        <body>
            <table>
                <tr> 
                    <td>Age</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Updatd</td>
                    <td>DELETE</td>
                <tr>
                    <? while($row = mysqli_fetch_array($result)){?>
                        <tr>
                            <td><?=$row[0]?></td>
                            <td><?=$row[1]?></td>
                            <td><?=$row[2]?></td>
                            <td><a href="update.php?Age=<?=$row[0]?>"onclick="return confirm
                            ('수정 하시겠습니까?')">수정하기</a></td>
                           <td><a href="delete.php?Age=<?=$row[0]?>"onclick="return confirm
                            ('삭제 하시겠습니까?')">삭제하기</a></td>
                        </tr>
                    <?
                    }
                    ?>
                </tr></tr>
                </table>
                <form action="input.php"method="post">
                    <input type = "int"placeholder="Age"
                        name = "Age"/><br>
                    <input type="varchar"placeholder="Name"
                        name="Name"/><br>
                    <input type="varchar"placeholder="Address"
                        name="Address"/><br>
                    <input type="submit" value = "추가"/>
                </form>
                </body>
                </html>