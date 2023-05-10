<?php

require_once('connect.php');

extract($_GET);
  
    $name=$_GET['pname'];
    

    $query = "DELETE from product where name='$name';";
    $r = mysqli_query($con, $query);
    
    mysqli_close($con);
    
	header("Location: admin.php");
    
?>

