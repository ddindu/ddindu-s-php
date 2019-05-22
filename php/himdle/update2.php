<html>
    <head>
        <meta charset="utf-8">
        <?php
            extract($_POST);
            $link=mysqli_connect("localhost","root","apmsetup","humaninfo");
            mysqli_set_charset($link,"utf8");
            $sql = "UPDATE humaninfo SET name = '$Name', address= '$Address' WHERE Age = '$Age' ";
            $result = mysqli_query($link, $sql);
                if($result){
                    echo ("<script>location.href='./HumanInfo2.php';</script>");
                }
                else{
                    echo "SQL error : ";
                    echo mysqli_error($link);
                }
        ?>
    <head>
</html>