<?php 
require './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                  html,
      body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: "Helvetica", sans-serif;
      }
      img {
        max-width: 100%;
      }
      .slider-container {
        height: 60%;
        width: 100%;
        position: relative;
        overflow: hidden;
        text-align: center;
      }
      .menu {
        position: absolute;
        left: 0;
        z-index: 900;
        width: 100%;
        bottom: 0;
      }
      .menu label {
        cursor: pointer;
        display: inline-block;
        width: 16px;
        height: 16px;
        background: #fff;
        border-radius: 50px;
        margin: 0 0.2em 1em;
      }
      .menu label:hover,
      .menu label:focus {
        background: #1c87c9;
      }
      .slide {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 100%;
        z-index: 10;
        padding: 8em 1em 0;
        background-size: cover;
        background-position: 50% 50%;
        transition: left 0s 0.75s;
      }
      [id^="slide"]:checked + .slide {
        left: 0;
        z-index: 100;
        transition: left 0.65s ease-out;
      }
      .slide-1 {
        background-image: url("img/shirt2.jpg");
      }
      .slide-2 {
        background-image: url("img/watch4.jpg");
      }
      .slide-3 {
        background-image: url("img/camera2.png");
      }
            footer{
    position:relative;
    padding: 10px 0;
    text-align: center;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
</style>
    </head>
    <body>
        <?php
        require './includes/header.php';
        require './includes/check_if_added.php';
        ?>
            
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Lifestyle Store!</h1>
                    <p>We have best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
                </div>
            </div>
        <!--slide code-->
            <div class="slider-container">
      <div class="menu">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
        <label for="slide-dot-3"></label>
      </div>
      <input id="slide-dot-1" type="radio" name="slides" checked>
      <div class="slide slide-1"></div>
      <input id="slide-dot-2" type="radio" name="slides">
      <div class="slide slide-2"></div>
      <input id="slide-dot-3" type="radio" name="slides">
      <div class="slide slide-3"></div>
    </div>
        <div class="container">
        <div class="row text-center">
            
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                <img src="img/5.jpg" class="img-responsive">
                <div class="caption">
                    <h3>Cannnon EOS</h3>
                    <P>Price:Rs.36000.00</P>
                							<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{
								 if(check_if_added_to_cart(1)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                  
                </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
            <img src="img/2.jpg" class="img-responsive">
            <div class="caption">
                <h3>Sony DSLR</h3>
                <P>Price:Rs.40000.00</P>
                									<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ 
								 if(check_if_added_to_cart(2)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                 
            </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/3.jpg" class="img-responsive">
            <div class="caption">
                <h3>Sony DSLR</h3>
                <P>Price:Rs.50000.00</P>
				<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/4.jpg" class="img-responsive">
            <div class="caption">
                <h3>Olyumpus DSLR</h3>
                <P>Price:Rs.80000.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                 
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/9.jpg" class="img-responsive">
            <div class="caption">
                <h3>Titan Model #301</h3>
                <P>Price:Rs.13000.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/10.jpg" class="img-responsive">
            <div class="caption">
                <h3>Titan Model #201</h3>
                <P>Price:Rs.3000.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/11.jpg" class="img-responsive">
            <div class="caption">
                <h3>HMT Milan</h3>
                <P>Price:Rs.8000.00</P>
				<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

               
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/12.jpg" class="img-responsive">
            <div class="caption">
                <h3>Faber Luba#111</h3>
                <P>Price:Rs.18000.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/8.jpg" class="img-responsive">
            <div class="caption">
                <h3>H&W</h3>
                <P>Price:Rs.800.00</P>
				<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

               
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/6.jpg" class="img-responsive">
            <div class="caption">
                <h3>Luis Phil</h3>
                <P>Price:Rs.1000.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

               
            </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/13.jpg" class="img-responsive">
            <div class="caption">
                <h3>John Zok</h3>
                <P>Price:Rs.1500.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                             </div>
                 </div>
            </div>
                  <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/14.jpg" class="img-responsive">
            <div class="caption">
                <h3>Jhalsani</h3>
                <P>Price:Rs.1300.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
            <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/15.jpg" class="img-responsive">
            <div class="caption">
                <h3>Dell M15 R3 Alienware Gaming Laptop</h3>
                <P>Price:Rs.69900.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(13)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=13" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
             <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/16.jpg" class="img-responsive">
            <div class="caption">
                <h3>Acer A514-53 Aspire 5 Slim Laptop, 35.56 cm (14 inch)</h3>
                <P>Price:Rs.39999.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(14)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=14" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
             <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/17.jpg" class="img-responsive">
            <div class="caption">
                <h3>HP 15s-dr2019tu(10th Gen Intel Core i5/Full HD)</h3>
                <P>Price:Rs.65900.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(15)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=15" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
             <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
            <img src="img/18.png" class="img-responsive">
            <div class="caption">
                <h3> Apple MacBook Air (13.3-inch/33.78 cm, Apple M1 chip)</h3>
                <P>Price:Rs.85900.00</P>
                										<?php if(!isset($_SESSION["email"])){ ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(16)){
						echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart_add.php?id=16" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
									<?php }
								} ?>

                
            </div>
                 </div>
            </div>
            
                     
        </div>
</div>
        <?php
            require './includes/footer.php';
            ?>
           
                
            
        
    </body>
</html>
