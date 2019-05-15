<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "apmsetup";
        $dbname = "HumanInfo";

        $age = $_POST["Age"];
        $nm = $_POST["name"];
        $add = $_POST["address"];
        
        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            die("Connection falied: ".$conn->connect_error);
        }
        $sql = "INSERT INTO HumanInfo (Age,name,address)
            VALUES ($age,$nm,$add)";
        if($conn->query($sql)===TRUE){
            echo "New record created successfully";
        }else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
    ?>
</html>