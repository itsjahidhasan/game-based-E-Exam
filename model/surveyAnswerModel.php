<?php
require_once('db.php');
function surveyAnswer($answer){
    $conn = getConnection();
    $sql = "insert into surveyanswer values ('', '{$answer['studentId']}', '{$answer['questionId']}', '{$answer['semester']}', '{$answer['techniqueStress']}', '{$answer['gameEnjoyment']}', '{$answer['focusOnGameExam']}', '{$answer['lowerStressDecision']}')";
    if(mysqli_query($conn,$sql)){
    return true;
}
else{
    return false;
}
}

?>