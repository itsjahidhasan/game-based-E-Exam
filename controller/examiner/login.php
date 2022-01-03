<?php
require_once('../../model/examinerModel.php');
  if(isset( $_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "" && $password == "" ){
      echo "Empty submit";
    }
    else{
      $flag = login($username, $password);
      if ( $flag = true ) {
        session_start();
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
        header('location: ../../view/Examiner/home.html');
      }
      else{
        echo "Login unsuccessful";
      }
        
    }
  }

?>