<?php

	// $dbname = "epiz_32375601_exam_care";
	// $dbuser = "epiz_32375601";
	// $dbpass = "5JJMzLEChj22QNV";
	// $host	= "sql309.epizy.com";

	$dbname = "exam_care";
	$dbuser = "root";
	$dbpass = "";
	$host	= "";

	function getConnection(){
		global $dbname, $dbpass, $host, $dbuser;
	
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>