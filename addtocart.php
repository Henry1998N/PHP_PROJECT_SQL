<?php
include 'db_connect.php';

 if(!isset($_SESSION['proid1'])){
    $_SESSION['proid1']=$_GET['id'];
  } 
  else{
    $_SESSION['proid1']=$_GET['id'];

  }
  $pi=$_SESSION['proid1'];

  $sql3="select * from product where id=$pi";
  $result3 = mysqli_query($conn,$sql3);
  $r3=mysqli_fetch_array($result3);
  $dqnt=$r3['quantity'];

  if((!is_numeric($_POST['qnt'])) || $_POST['qnt']<0){
        echo '<script> alert("quantity not valid")</script>';
        echo '<script> window.location="products.php" </script>';

  }
  else if($dqnt<$_POST['qnt']){
    echo '<script> alert("we dont have quantity as you wish")</script>';
    echo '<script> window.location="products.php" </script>';
  }
  else{
$qnt=$_POST['qnt'];
// write query for users 
$cust=$_SESSION['custid'];
$sql = "insert into cart values('$cust','$pi',$qnt)";
$sql1 = "select * from cart";
$cnt=0;
$result1 = mysqli_query($conn,$sql1);

while($r=mysqli_fetch_array($result1)){
if($r['product_id']== $pi){
    $cnt++;
}}
if($cnt==0){
$result = mysqli_query($conn,$sql);
if($result){
    echo '<script> alert("product has been added successfully")</script>';
        echo '<script> window.location="cart.php" </script>';}}
  else{
    echo '<script> alert("product is already in cart")</script>';
    echo '<script> window.location="cart.php" </script>';
  }      



  }
?>