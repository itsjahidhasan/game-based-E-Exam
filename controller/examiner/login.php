<?php
  if(isset( $_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "" && $password == "" ){
      echo "Empty submit";
    }
    
  }

?>