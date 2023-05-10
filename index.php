<?php
	require_once('connect.php');


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
    <form  method="get"  action="addToCart.php">


<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
    </nav>

    <div class="icons">
        <div class="profile" id="search-btn"><a href="profile.php"><img src="images/profile.png" alt="" class="profile-logo" ></a></div>
        <div class="cart" id="cart-btn"><a href="cart.php"><img src="images/cart.png" alt="" class="cart-logo"></a></div>
    </div>

    

</header>


<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href="#" class="btn">get yours now</a>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>


<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

<?php
		$query = "SELECT * from product WHERE type='menu';";
		$result = mysqli_query($con, $query);
      
		while ($row = mysqli_fetch_assoc($result)) {
            
?>
<form action="addToCart.php" method="Get">
        <div class="box">
            <img src=<?=$row['image']?> alt="">
            <h3><?=$row['name']?></h3>
            <div class="price">$<?=$row['price']?></div>
            <input type="hidden" name="pid" value=<?=$row['idp']?>/>
            <input type="submit" class="btn" name="addToCart" value="Add to cart" name="sub" onclick="alert(<?=$row['idp']?>)" />
        </div>
        </form>
 <?php
                
            }
        
		
?>
    </div>

</section>


<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

<?php
		$q = "SELECT * from product WHERE type='product';";
		$r = mysqli_query($con, $q);
		while ($row = mysqli_fetch_assoc($r)) {
?>
<form action="addToCart.php" method="Get">
            <div class="box">
            <div class="content">
                <img src=<?=$row['image']?> alt="">
                <h3><?=$row['name']?></h3>
                <div class="price">$<?=$row['price']?></div>
                <input type="hidden" name="pid" value="<?=$row['idp']?>"/>
                <input type="submit" class="btn" name="addToCart" value="Add to cart" />
            </div>
            </div>
            </form>
 <?php
           
    }
?>
       
        </div>

    

</section>


<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

 <?php
		$q = "SELECT * from users ;";
		$r = mysqli_query($con, $q);
		while ($row = mysqli_fetch_assoc($r)) {
?>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p><?=$row['review']?></p>
            <img src=<?=$row['img']?> class="user" alt="">
            <h3><?=$row['fname']?></h3>
           
        </div>
 <?php
		}
		mysqli_close($con);
?>
        

    </div>

</section>


<section class="footer">

    <div class="contact">
        <label>Phone: 03-123456</label>
        <label> | </label>
        <label>email: coffee@gmail.com</label>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
    </div>

    <div class="credit">created by <span>Danielle | Toni | Anthony</span> | all rights reserved</div>

</section>

</form>

</body>
</html>