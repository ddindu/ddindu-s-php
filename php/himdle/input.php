<?php
    $link = mysqli_connect("localhost", "root", "apmsetup", "humaninfo");
    extract($_POST);
    mysqli_set_charset($link, "utf8");
    $sql = "insert into humaninfo(age, name, address) value ('$Age', '$Name', '$Address')";
    $result = mysqli_query($link, $sql);
    echo("<script>location.href='./HumanInfo2.php';</script>");
?>