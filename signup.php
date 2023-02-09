<?php

if(isset($_SESSION["id"])){
  header("location:product_page.php");
}
require './includes/common.php';
?>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>.row_style{margin-top:10%;}
         .container_plus{
        margin-left:400px;}</style>
    <body>
      <?php        require './includes/header.php';
      ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required="true" class="form-control">
                    </div>
                         <div class="form-group">
                             <input type="email" name="email" placeholder="Email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                         <div class="form-group">
                             <input type="password" name="password" placeholder="Password" required="true" class="form-control" pattern=".{6,}">
                    </div>
                         <div class="form-group">
                             <input type="number" name="contact" placeholder="Contact" required="true" class="form-control">
                    </div>
                         <div class="form-group">
                        <input type="text" name="city" placeholder="City" required="true" class="form-control">
                    </div>
                         <div class="form-group">
                             <input type="text" name="address" placeholder="Address" required="true" class="form-control">
                    </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                   <br/><br/> Already have an account?Click <a href="login.php">here</a> to Login.    
                    </form>
                </div>
                
                    
                
            </div>
        </div>
        <?php 
      require './includes/footer.php';
      ?>
    </body>
</html>
