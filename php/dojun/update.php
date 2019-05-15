<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "apmsetup";
        $dbname = "humaninfo";

        $add = $_POST["address"];
        $name = $_POST["name"];
        
        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            die("Connection falied: ".$conn->connect_error);
        }
        $sql = "UPDATE humaninfo SET name = '$name' WHERE address= '$add' ";
        if($conn->query($sql)===TRUE){
            echo "Record updated successfully";
        }else{
            echo "Error updating record : ".$conn->error;
        }
        $conn->close();
    ?>
</html>