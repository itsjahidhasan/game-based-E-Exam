<?php
require_once('db.php');
  function check(){
    return "Connection linked";
  }
  function registration($user){
    $conn = getConnection();
    $sql = "insert into examiner values('', '{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['university']}')";
    
    
    
    if(mysqli_query($conn, $sql)){
      return true;
      }else{
      return false;
      }
  }
  function login($username, $password){
    $row =[];
		$conn = getConnection();
		$sql = "select * from examiner where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    
    
		if(is_countable($row) && count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


?>