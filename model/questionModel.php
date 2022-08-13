<?php
require_once('db.php');
function submissionCheck($queId,$studentId){
    $conn = getConnection();
    $sql = "select * from answer where questionId = '{$queId}' and studentId = '{$studentId}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if(is_countable($row) && count($row)>0){
        return true;
    }
    else
    {
        return false;
    }
}

function questionSetCheck($queId){
    $conn = getConnection();
    $sql = "select * from questions where questionId = '{$queId}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if(is_countable($row) && count($row)>0){
        return true;
    }
    else
    {
        return false;
    }
}

function submitAnswer($answer){
    $conn = getConnection();
    $sql = "insert into answer values ('', '{$answer['questionId']}', '{$answer['studentId']}', '{$answer['Q1']}', '{$answer['Q2']}', '{$answer['Q3']}', '{$answer['Q4']}', '{$answer['Q5']}')";
    if(mysqli_query($conn,$sql)){
    return true;
    }
    else{
        return false;
    }
}
?>