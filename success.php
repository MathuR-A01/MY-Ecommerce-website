<?php
require './includes/common.php';
if(!isset($_SESSION["email"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <style>.row_style{margin-top:10%;}
                .panel-margin{margin-top: 80px;}</style>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require './includes/header.php';
        $user_id=$_SESSION["id"];
        $query="SELECT item_id from users_items WHERE user_id='$user_id'";
        $result= mysqli_query($con, $query) or die(mysqli_error($con));
        while($row= mysqli_fetch_array($result)){
            $item_id=$row["item_id"];
            $query1="UPDATE users_items SET status='Confirmed' where item_id='$item_id'";
            $result1= mysqli_query($con, $query1);
        }
        ?>
        <div class="container panel-margin  ">
            <div class="alert alert-success">
            <h3>Your order is confirmed.Thank you for shopping with us.
                <a href="product_page.php">Click here</a> to purchase any other item.</h3>
            </div>
        </div>
        <?php
        require './includes/footer.php';
        ?>
    </body>
</html>
