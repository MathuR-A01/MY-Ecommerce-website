<?php
require './includes/common.php';
?>

<?php

if(isset($_SESSION['email'])){
    header('location:Product_Page.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
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
        height: 100%;
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
        background: url("img/man.jpg");
      background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: #f8f8f8;
      padding-top: 75px;
    padding-bottom: 50px;
    text-align: center;
    margin-top: 50px;
      }
      .slide-2 {
        background: url("img/smart-watch.jpg");
        background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: #f8f8f8;
     padding-top: 75px;
    padding-bottom: 50px;
    text-align: center;
      }
      .slide-3 {
        background: url("img/laptop.jpg");
        background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: #f8f8f8;
     padding-top: 75px;
    padding-bottom: 50px;
    text-align: center;
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
 ?>
           <!--slide show-->
   <div class="slider-container">
      <div class="menu">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
        <label for="slide-dot-3"></label>
      </div>
      <input id="slide-dot-1" type="radio" name="slides" checked>
      <div class="slide slide-1">
           <div class="container">
           <div id="banner_content">
               <h1>We sell lifestyle</h1>
               <p>Flat 40% OFF on Premium Brands</p>
               <a href="product_page.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    
                </div>
            </div>
      </div>
      <input id="slide-dot-2" type="radio" name="slides">
      <div class="slide slide-2">
           <div class="container">
           <div id="banner_content">
               <h1>We sell lifestyle</h1>
               <p>Flat 40% OFF on Premium Brands</p>
               <a href="product_page.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    
                </div>
            </div>
      </div>
      <input id="slide-dot-3" type="radio" name="slides">
      <div class="slide slide-3">
      
        <div class="container">
           <div id="banner_content">
               <h1>We sell lifestyle</h1>
               <p>Flat 40% OFF on Premium Brands</p>
               <a href="product_page.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    
                </div>
            </div></div>
    </div>     
        
   
     
        <div class="container">
        <div class="items">
  
            <img src="img/1.jpg" alt="camera" class="thumbnail">
            <div class="caption">
              <h2>Cameras</h2>
                <p>Choose from the best available in the world</p>
            </div>
        </div>
            <div class="items">
            <img src="img/7.jpg" alt="watch" class="thumbnail">
            <div class="caption">
            <h2>Watches</h2>
            <p>Original watches from the best brand</p>
            </div>
        </div>
        <div class="items">
        
            <img src="img/8.jpg" alt="shirt" class="thumbnail">
            <div class="caption">
                <h2>Shirts</h2>
                <p>Our exiquisible collection of shirts</p>
            </div>
        </div>
        </div>
       <?php
 require './includes/footer.php';
        ?>
    </body>
</html>
