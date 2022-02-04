<?php
require_once('../../model/interactionModel.php');
  session_start();
  $mouseClick = $_POST["mouseClick"];
  $keypress = $_POST["keypress"];
  $studentId = $_SESSION['studentId'];
  $questionId = $_SESSION['queId'];
  $queNo = 2;
  $optChange = $_POST['optChange'];
  $focusOut = $_POST['focusOut'];
  $interactionData = [
    'focusOut' => $focusOut,
    'optChange' => $optChange,  
    'mouseClick'=>$mouseClick,
    'keypress'=> $keypress,
    'queNumber'=>$queNo, 
    'studentId'=> $studentId,
    'questionId'=> $questionId,
  ];
  interaction($interactionData);
?>