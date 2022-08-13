<?php
require_once('../../model/questionModel.php');
  if(isset( $_POST['submit'])){
    $queId = $_POST['queId'];
    $studentId = $_POST['studentId'];
    if($queId == "" && $studentId == ""){
      echo "Input filled is empty";
    }
    else{
      session_start();
      $flag = submissionCheck($queId,$studentId);

      if ($flag==false){
        if(questionSetCheck($queId)){
          $_SESSION['queId'] = $queId;
          $_SESSION['studentId'] = $studentId;
          header('location: ../../view/GameQuiz/');
        }
        else{
          echo 'you have entered wrong Question ID';
        }
      }
      else{
        $_SESSION['error']='You have already submitted your answer';

        echo $_SESSION['error'];
      }
    }

  }

?>