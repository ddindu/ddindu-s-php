<?php
    $link=mysqli_connect("localhost","root","apmsetup","humaninfo");
    $Age=$_GET['Age'];
    mysqli_set_charset($link,"utf8");
    $sql = "DELETE FROM humaninfo WHERE Age = $Age";
    $result = mysqli_query($link, $sql);
    echo ("<script>location.href='/php/himdle/HumanInfo2.php';</script>");
?>