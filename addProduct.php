<?php

require_once('connect.php');

extract($_POST);
  
    $type=$_POST["type"];
    $name=$_POST['pname'];
    $price=$_POST['price'];

    $img = $_FILES['image']['name']; 
    $folder = 'images/'.$img;

    $queryAdmin = "INSERT INTO product (type, name, price, image) VALUES ('$type','$name','$price','\"$folder\"');";
    $r = mysqli_query($con, $queryAdmin);
    
    mysqli_close($con);
    
		header("Location: admin.php");
    
?>