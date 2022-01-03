<?php
require_once('../../model/interactionModel.php');
  session_start();
  $mouseClick = $_POST["mouseClick"];
  $keypress = $_POST["keypress"];
  $studentId = $_SESSION['studentId'];
  $questionId = $_SESSION['queId'];
  $queNo = 1;
  $interactionData = [  
    'mouseClick'=>$mouseClick,
    'keypress'=> $keypress,
    'queNumber'=>$queNo, 
    'studentId'=> $studentId,
    'questionId'=> $questionId,
  ];
  interaction($interactionData);
?>