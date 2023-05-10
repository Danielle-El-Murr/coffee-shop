<?php
	if (isset($_POST["username"]) && isset($_POST["pass"])){
		extract($_POST);
		require_once("connect.php");
        	
		$passwd = md5($pass);
       
		$query = "SELECT * FROM users WHERE uname = '{$username}'";
		
		$result = mysqli_query($con, $query);
		if (!$result) {
			die(mysqli_error());
		}
        
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            
			if ($passwd == $row['pass']) {
				session_start();
				$_SESSION["loggedin"] = true;
				$_SESSION["uname"] = $row["uname"];
				$_SESSION["uid"] = $row["id"];
				header("Location: index.php");
			}
            
		}else  {
			
				header("Location: signup.php");
			}
    }
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>

    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    

<header class="header">

    <a href="index.php" class="logo">
        <img src="images/logo.png" alt="">
    </a>

</header>


<section class="main" id="main">
<form  method="post" enctype="multipart/form-data" action="login.php">
    <div class="title"><label>Login</label></div> <br/>
    <div class="user"><input  type="text" id="username" placeholder="Username" name="username" /></div><br/>
    <div class="pass"><input  type="password" id="password" placeholder="Password" name="pass"/></div><br/>
    <div ><input  type="submit" value="Login" class="submit"/></div><br/>
    <div class="signup"><a href="signup.php"><label>Create an account!</label></a></div> <br/>
</form>
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