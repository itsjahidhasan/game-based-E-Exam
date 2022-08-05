<?php

  if(isset( $_POST['submit'])){
    $queId = $_POST['queId'];
    $queType = "";
    if(isset($_POST['testType'])) {
      $var = $_POST['testType'];
      $queType = $var;
    };
    if($queId == "" && $queType == ""){
      echo "Input filled is empty";
    }
    else{
      session_start();
      $_SESSION['queId'] = $queId;
      $_SESSION['queType'] = $queType;
      
    }

  }

?>