<?php
include "db_connect.php";
$itemid=$_GET['id'];
$sql="delete from cart where product_id='$itemid'";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<script> alert("item deleted from cart")</script>';
    echo '<script> window.location="cart.php" </script>';
}


?>