
<!DOCTYPE html>

 <?php
        // put your 
$con= mysqli_connect("localhost", "root", "", "ecommerce")or
        die(mysqli_error($con));
$select_query="SELECT id,email,first_name from users ";
$select_query_result= mysqli_query($con, $select_query) or
        die(mysqli_error($con));



        
        
        ?>
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>users</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <form action="Login_script.php" method="POST">
                            <div class="form-group">
                                <input type="email" required="true" class="form-control" placeholder="Email" name="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <div><?php 
                                echo $_GET['email_error']; ?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}">
                                <div><?php 
 echo $_GET['password_error']; ?></div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form><br/>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--<div class="conatainer">
            <div class="row top_margin">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">User Registration</div>
                <div class="panel-body">
                    <form method="post" action="user_registration_script.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                        <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div> 
        <div class="conatiner">
            <?php while($row= mysqli_fetch_array($select_query_result)){?>
            <div class="row">
                <div class="col-lg-12"><h4>Users</h4></div>
            </div>
            <div class="row">
                <div class="col-xs-2">ID</div>
                <div class="col-xs-10"><?php echo $row['id']; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">Email</div>
                <div class="col-xs-10"><?php echo $row['email'];?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">First Name</div>
                <div class="col-xs-10"><?php echo $row['first_name']?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">Products</div>
                <div class="col-xs-10"><?php echo number_of_products_purchased($con, $row['id'])?></div>
                
            </div>
            <?php }?>
            <hr/>
        </div>
        -->
       
    </body>
</html>
<!--<?php 
function number_of_products_purchased($con,$user_id){
    $users_products_query="SELECT id FROM user_product WHERE user_id='$user_id'";
    $users_product_result=mysqli_query($con,$users_products_query);
    $number_of_products= mysqli_num_rows($users_product_result);
    return $number_of_products;
           
}
?>
-->
