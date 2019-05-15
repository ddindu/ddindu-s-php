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
                $json_1 = json_encode($row["classNumber"]);
                $json_2 = json_encode($row["name"]);
                $json_3 = json_encode($row["phoneNumber"]);0
                $json_4 = json_encode($row["password"]);
                echo "{"."Age : ".$json_1.", "."name : ".$json_2.", "."phn : ".$json_3.", "."pass : ".$json_4."}".", ";
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    ?>
</html>