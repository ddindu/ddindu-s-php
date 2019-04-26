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
        $sql = "DELETE FROM d WHERE classNumber = 13";
        if($conn->query($sql)===TRUE){
            echo "Record deleted successfully";
        }else{
            echo "Error deleting record : ".$conn->error;
        }
    ?>
</html>