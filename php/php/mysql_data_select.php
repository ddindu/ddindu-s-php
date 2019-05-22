<!DOCTYPE html>
<html>
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
        $sql = "SELECT classNumber,name,phoneNumber,password FROM d";

        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<br>"."cln : ".$row["classNumber"]."<br>"."name : ".$row["name"]."<br>"."phn : ".$row["phoneNumber"]
                ."<br>"."pass : ".$row["password"];
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    ?>
</html>