<?php
	session_start();
	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
		header("Location: login.php");
	} else {
		require_once('connect.php');
		if(isset($_GET['pid'])&& isset($_SESSION["uid"])){
		
        $uid=$_SESSION["uid"];
        
        $pid=$_GET['pid'];
        $query = "INSERT INTO cart VALUES ('$uid','$pid','1');";
       
		mysqli_query($con, $query);
		mysqli_close($con);
		header("Location: index.php");
	}

}  
?>