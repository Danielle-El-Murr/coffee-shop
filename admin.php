
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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
        <div class="content">


        <div class="addp">
        <form  method="post" action="addProduct.php" enctype="multipart/form-data">
<label>Add product</label><br/><br/>
<input type="text" name="type" class="type" placeholder="enter type"><br/><br/>
<input type="text" name="pname" class="name" placeholder="enter the name"><br/><br/>
<input type="number" name="price" class="price" placeholder="enter the price"><br/><br/>
<input type="file" name="image" class="image" placeholder="choose an image"><br/><br/>
<input type="submit" name="addproduct" value="add product" class="add"><br/><br/>

        </form>
</div>

        <div class="deletep">
        <form  method="get" action="deleteProduct.php">
<label>Delete product</label><br/><br/>
<input type="text" name="pname" class="name" placeholder="enter the name"><br/><br/>
<input type="submit" name="deleteproduct" value="delete product" calss="delete">
    </form>
    </div>

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