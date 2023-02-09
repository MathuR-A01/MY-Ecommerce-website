<?php
require './includes/common.php';
if(!isset($_SESSION["email"])){
    header("location:index.php");
}else{
    $user_id=$_SESSION["id"];
    $email=$_SESSION["email"];
    $old_password= md5(mysqli_real_escape_string($con,$_POST["old_pass"]));
    $new_password= md5(mysqli_real_escape_string($con,$_POST["new_pass"]));
    $retype_pass= md5(mysqli_real_escape_string($con,$_POST["retype_new_pass"]));
   
   $query1="SELECT password from users where id='$user_id'";
   $result1= mysqli_query($con, $query1);
   $row= mysqli_fetch_array($result1);
   
   
   if($old_password!=$row[0]){
   echo "The old password do not match.";
   }else{
   
    if($new_password!=$retype_pass){
       echo "The password do not match.Try again.";
    

        }else{
        
        
        
    $query="update users set password ='$new_password' where email='$email' AND id='$user_id'";    
    $result= mysqli_query($con, $query);
     
         
        echo"Your password is successfully Updated.";
    
        }}
}
?>

