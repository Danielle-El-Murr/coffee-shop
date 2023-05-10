
<?php 
	if (isset($_POST["username"]) && isset($_POST["password"])){
		extract($_POST);
    require_once("connect.php");

    $img = $_FILES['pic']['name']; 
    $folder = 'images/'.$img;

    $passwd = md5($password);
      
    $sql = "INSERT INTO users (fname, lname, uname, pass, img) VALUES ('$fname','$lname','$username','$passwd','\"$folder\"');";

            if (mysqli_query($con, $sql) === TRUE) {
                header("Location: login.php");
            } else {
                echo "Error: " ;
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
<form  method="post" enctype="multipart/form-data" action="signup.php">

    <div class="title"><label>Signup</label></div> <br/>
    <div class="first"><input  type="text" id="first" placeholder="First Name" name="fname" /></div><br/>
    <div class="last"><input  type="text" id="last" placeholder="Last Name" name="lname"/></div><br/>
    <div class="user"><input  type="text" id="username" placeholder="Username" name="username"/></div><br/>
    <div class="pass"><input  type="password" id="password" placeholder="Password" name="password" /></div><br/>
    <div class="img"><input  type="file" id="pic" name="pic" /></div><br/>
    <div ><input  type="submit"  value="Signup" class="submit" /></div><br/>
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