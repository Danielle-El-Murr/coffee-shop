<?php
	       session_start();
            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
                header("Location: login.php");
            }else{
                require_once('connect.php');}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

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
<section class="menu" id="menu">

    <h1 class="heading"> your <span>cart</span> </h1>
    <div class="box-container">

<?php
        if(isset($_SESSION["uid"])){
        $uid=$_SESSION["uid"];
		$query = "SELECT * FROM product p inner join cart c on p.idp = c.pid and c.uid = '$uid';";
		$result = mysqli_query($con, $query);
        $qty=0;
		while ($row = mysqli_fetch_assoc($result)) {
            $qty += $row['price'];  
        
?>

        <div class="box">
            <img src=<?=$row['image']?> alt="">
            <h3><?=$row['name']?></h3>
            <div class="price">$<?=$row['price']?></div>
        </div>

 <?php
              
            }
        }else{
            echo "Not set";
        }
        
?>

    </div>

</section>

<h1 class = "heading" style="color:white;display:block;width:100%;heigh:10vh;">Your total is : <?=$qty?></h1>


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