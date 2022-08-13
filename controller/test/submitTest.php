<?php
require_once('../../model/questionModel.php');
session_start();
if(isset($_POST['submit'])){

    $studentId = $_SESSION['studentId'];
    $questionId = $_SESSION['queId'];
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];

    if($studentId=='' && $questionId == ''){
        echo 'You are in a wrong test';
    }
    elseif($Q1=='' && $Q2 == ''  && $Q3 == '' && $Q4 == '' && $Q5 == ''){
        echo "You haven't selected any answer. Start the test again.";
    }
    else{
        $answer =[
            'questionId' => $questionId,
            'studentId' => $studentId,
            'Q1' => $Q1,
            'Q2' => $Q2,
            'Q3' => $Q3,
            'Q4' => $Q4,
            'Q5' => $Q5,
        ];
        submitAnswer($answer);
        header('location: ../../view/SurveyQuestionnaire');
    }





}

?>