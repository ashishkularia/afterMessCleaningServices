<?php
$user = new User();
if ($_REQUEST["q"] == 'login') {
    $user->login($_REQUEST["uname"],$_REQUEST["pass"]);
}

if($_REQUEST["q"] == 'signup'){
    $user->signup();
}

class Connection{
    public function con(){
        $servername = "localhost";
        $username = "ashisku";
        $password = "ashisku";
        $dbname = "aftermessCleaning";
        
        // Create connection
        return new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    
}

class User extends Connection{
    function login($uid, $pass){
        $sql = "SELECT pass FROM user_data WHERE uid=$uid OR email=$uid";
        $con = new Connection();
        $conn = $con->con();
        $result = $conn->query($sql);
        echo($sql);
        error_log($result);
        error_log($conn);
        if ($result->num_rows > 0) {
            if ($result->fetch_assoc() == $pass){
                echo "true";
            }
        } else {
            echo "false";
        }
        $conn->close();
    }
}
?>
