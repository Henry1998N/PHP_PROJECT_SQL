<?php
include "db_connect.php";
$id=$_GET['id'];
$sql = "delete from product where id='$id'";
$result = mysqli_query($conn,$sql);
echo '<script> alert("Product deleted successfully")</script>';
echo '<script> window.location="managerpro.php" </script>';
?>