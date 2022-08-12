<?php
require_once('../model/surveyAnswerModel.php');
session_start();
if(isset($_POST['submit'])){
    $semester = $_POST['semester'];
    $techniqueStress = $_POST['techniqueStress'];
    $gameEnjoyment = $_POST['gameEnjoyment'];
    $focusOnGameExam = $_POST['focusOnGameExam'];
    $lowerStressDecision = $_POST['lowerStressDecision'];
    $studentId = $_SESSION['studentId'];
    $questionId = $_SESSION['queId'];
    if($semester=="" && $techniqueStress=="" && $gameEnjoyment=="" && $focusOnGameExam=="" && $lowerStressDecision==""){
        echo "empty submit";
    }
    else{
        $surveyData=[
            'studentId' => $studentId,
            'questionId' => $questionId,
            'semester' => $semester,
            'techniqueStress' => $techniqueStress,
            'gameEnjoyment' => $gameEnjoyment,
            'focusOnGameExam' => $focusOnGameExam,
            'lowerStressDecision' => $lowerStressDecision,
        ];
        surveyAnswer($surveyData);
        session_destroy();
        header('location: ../');
    }



}

?>