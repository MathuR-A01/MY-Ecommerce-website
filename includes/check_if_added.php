<?php
function check_if_added_to_cart($item_id){
require 'common.php';
$user_id=$_SESSION["id"];
$query="SELECT * from users_items where item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
$query_result= mysqli_query($con, $query);
if(mysqli_num_rows($query_result)>=1){
    return TRUE;
}else{
    return FALSE;
}
}

?>
