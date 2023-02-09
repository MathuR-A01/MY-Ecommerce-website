<?php
require './includes/common.php';
if(isset($_SESSION["email"])){
    header("loacation:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>.row_style{
            margin-top: 10%
}
        .container_plus{
        margin-left:400px;}</style>
    </head>
    <body>
             <?php        require './includes/header.php';
             ?>
        <div class="container container_plus">
            <div class="row row_style">
                <div class="col-xs-6">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3>Login</h3></div>
            <div class="panel-body">
                <div class="text-warning">   <p> Login to make purchase</p></div>
                <form  method="POST" action="login_submit.php">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                   
                </form>
            </div>  
            <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
                
            
        </div>
                </div>
            </div>
        </div>
        <?php
 require 'includes/footer.php';?>
    </body>
</html>
