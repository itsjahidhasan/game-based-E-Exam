<?php
  require_once('db.php');
  function interaction($interaction){
    $conn = getConnection();
    $sql = "insert into interaction values('', '{$interaction['questionId']}', '{$interaction['studentId']}', '{$interaction['queNumber']}', '{$interaction['keypress']}', '{$interaction['mouseClick']}')";
    
    
    
    if(mysqli_query($conn, $sql)){
      return true;
      }else{
      return false;
      }
  }

?>