<?php
require_once('connection.php')
$user = new User()
if ($_POST['q'] == 'login') {
  $user->login($_POST['uname'],$_POST['pass'])
}

if($_POST['q'] == 'signup'){
  $user->signup()
}


class User{
  function login($uid, $pass){
    $sql = "SELECT pass FROM Users WHERE id=$uid OR email=$uid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      if ($result->fetch_assoc() == $pass){
        echo "true"
      }
    } else {
      echo "false";
    }
  }

  function signup(){

  }
  $conn->close();
}
?>
