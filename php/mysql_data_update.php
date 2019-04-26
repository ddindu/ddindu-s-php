<!DOCTYPE html>
<html style="background-color:oldlace;">
    <head>
        <meta charset='utf-8'>
    </head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "apmsetup";
        $dbname = "c";
        
        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            die("Connection falied: ".$conn->connect_error);
        }
        $sql = "UPDATE d SET name = 'jinsu' WHERE classNumber=14 ";
        if($conn->query($sql)===TRUE){
            echo "Record updated successfully";
        }else{
            echo "Error updating record : ".$conn->error;
        }
        $conn->close();
    ?>
</html>