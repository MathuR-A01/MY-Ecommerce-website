<?php
require './includes/common.php';
if(!isset($_SESSION["email"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <style>.row_style{margin-top:10%;}</style>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require './includes/header.php';
        ?>
        <div class="container panel-margin">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <h2>Change Password</h2>
            <form method="POST" action="settings_script.php">
                <div class="form-group">
                    <input type="password" name="old_pass"  placeholder="Old Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="new_pass"  placeholder="New Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="retype_new_pass"  placeholder="Re-type New Password" class="form-control" required>
                    
                </div>
                <button type="change" name="change" class="btn btn-primary">Change</button>
                    
            </form>
                </div>
            </div>
        </div>
         <?php
        require './includes/footer.php';
        ?>
    </body>
</html>
