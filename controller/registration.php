<?php
require_once('../model/examinerModel.php');
if(isset( $_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $university = $_POST['university'];
  if($username == "" && $password == "" && $email == "" ){
    echo "Empty submit";
  }
  else{
    $registerData = [  
      'username'=>$username,
      'email'=> $email,
      'password'=>$password, 
      'university'=> $university,
    ];
    $data = registration($registerData);
    if($data){
      header('location: ../index.html');
    }
    else{
      echo "File didn't updated";
    }

    
  }
  
}
?>