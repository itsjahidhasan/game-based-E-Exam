<?php
require_once('db.php');
function submissionCheck($queId,$studentId){
    $conn = getConnection();
    $sql = "select * from answer where queId = '{$queId}' and studentId = '{$studentId}'";
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

function submitAnswer($ans){

}
?>