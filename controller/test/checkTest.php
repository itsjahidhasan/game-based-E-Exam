<?php

  if(isset( $_POST['submit'])){
    $queId = $_POST['queId'];
    $studentId = $_POST['studentId'];
    if($queId == "" && $studentId == ""){
      echo "Input filled is empty";
    }
    else{
      session_start();
      $_SESSION['queId'] = $queId;
      $_SESSION['studentId'] = $studentId;
      header('location: ../../view/GameQuiz/');
    }

  }

?>