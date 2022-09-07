<?php
 include "db_connect.php";
 $id=$_SESSION['proid'];

 if((((!empty($_POST['ProductName']))&& (!empty($_POST['CatagoryId']))) && ((!empty($_POST['price'])) && (!empty($_POST['Quantity'])))&& (!empty($_POST['img'])))){

    if(((is_numeric($_POST['price']) && is_numeric($_POST['Quantity']))) &&  (($_POST['CatagoryId']>=1 && $_POST['CatagoryId']<=4 )) && ($_POST['price']>0) && ($_POST['Quantity']>0)) {
        $f=$_POST['ProductName'];
        $l=$_POST['CatagoryId'];
        $p=$_POST['price']; 
        $e=$_POST['Quantity'];
        $im=$_POST['img'];
        $de=$_POST['description'];
        $id=$_SESSION['proid'];
        $sql="update product set ProductName='$f' , CatagoryId=$l, price=$p,quantity=$e,img='$im',description='$de' where id='$id'";
        $result = mysqli_query($conn,$sql);
        echo '<script> alert("product has been updated successfully")</script>';
        echo '<script> window.location="managerpro.php" </script>';
    }
    else{
        echo '<script> alert("Quantity or price must be valid,Category must be between 1 & 4  ")</script>';
        echo '<script> window.location="updatePro.php" </script>';
    }
 }
 else{
    echo '<script> alert("all inputs must be filled")</script>';
    echo '<script> window.location="updatePro.php" </script>';
 }



 ?>