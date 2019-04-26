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
        $sql = "INSERT INTO d (classNumber,name,phoneNumber,password)
            VALUES ('15','chang','0102222','1234')";
        if($conn->query($sql)===TRUE){
            echo "New record created successfully";
        }else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
    ?>
</html>