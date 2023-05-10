<?php

    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
        header("Location: login.php");
    } else {

        require_once("connect.php");
        $uid=$_SESSION["uid"];
    }
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="css/style.css">
    <script>

    </script>

</head>
<body>
    

<header class="header">

    <a href="index.php" class="logo">
        <img src="images/logo.png" alt="">
    </a>

</header>

<section class="home">
<form  method="post" enctype="multipart/form-data" action="profile.php">
<div class="content">


 <?php
		$q = "SELECT * from users WHERE id=$uid;";
		$r = mysqli_query($con, $q);
		while ($row = mysqli_fetch_assoc($r)) {
?>

            <img src=<?=$row['img']?> class="user" alt="">
            <h3><?=$row['fname']?> <?=$row['lname']?></h3>
            <label>Let us know what you think!</label></br>
            <textarea id="txtArea" rows="4" cols="20" placeholder="Leave a Review" name="review"></textarea></br>
            <input type="submit" name="submit" value="Submit">
           
 <?php
		}
        

            if(isset($_POST['submit']))
            {
                $r = trim($_POST['review']);
                $uid=$_SESSION["uid"];
                $sql = "UPDATE users SET review='$r' WHERE id='$uid';";
                
                $rs = mysqli_query($con, $sql);
                
            }

		mysqli_close($con);
?> 

        </br>
        <a href="logout.php"><label>Logout</label></a><br />
        
    </div>

    </section>

<section class="footer">

    <div class="contact">
        <label>Phone: 03-123456</label>
        <label> | </label>
        <label>email: coffee@gmail.com</label>
    </div>


    <div class="credit">created by <span>Danielle | Toni | Anothony</span> | all rights reserved</div>

</section>


</body>
</html>