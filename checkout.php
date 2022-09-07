<?php
include 'db_connect.php';
 $custid=$_SESSION['custid'];
 if(!isset($_SESSION['orderid'])){
    $_SESSION['orderid']=1;
 }
 $sql = 'SELECT * FROM cart';
 
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
 while($r=mysqli_fetch_array($result)){ 
 if($r['customer_id']==$custid){
     $sql1="select * from cart where customer_id =$custid";
     $result1 = mysqli_query($conn,$sql1);
     while($r1=mysqli_fetch_array($result1)){ 
     $ordnum=$_SESSION['orderid'];
     $pi=$r1['product_id'];
     $oq=$r1['quantity'];
     $sql2="insert into `order`  values ('$ordnum','$custid','".date("Y-m-d")."')";
     $result2 = mysqli_query($conn,$sql2);
     $sql4="insert into order_item values($ordnum,$pi,'$oq')";
     $result4 = mysqli_query($conn,$sql4);
     $sql3="delete from cart where customer_id=$custid and product_id='".$r1['product_id']."'";
     $result3 = mysqli_query($conn,$sql3);
     $sql13="select * from product where id=$pi";
     $result13 = mysqli_query($conn,$sql13);
     $r13=mysqli_fetch_array($result13);
     $dqnt=$r13['quantity'];
     $up=$dqnt-$r1['quantity'];
     mysqli_query($conn,"update product set quantity='$up' where id=$pi");
     }

    }
}
$_SESSION['orderid']++;


echo '<script> alert("Thank You For Your Purchase,Hope To See You Soon")</script>';
echo '<script> window.location="cart.php" </script>';
 }
 else{
    echo '<script> alert("Cart Is Empty..")</script>';
    echo '<script> window.location="products.php" </script>';  
 }

?>
