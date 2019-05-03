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
        $cln = $_POST['classNumber'];
        $nm = $_POST['name'];
        $phn = $_POST['phoneNumber'];
        $pw = $_POST['password'];
        
        $conn = new mysqli($servername,$username,$password,$dbname); 
        if($conn->connect_error){
            die("Connection falied: ".$conn->connect_error);
        }
        $sql = "SELECT * FROM d WHERE classNumber = $cln AND name = $nm";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row["phoneNumber"];
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    ?>
</html>