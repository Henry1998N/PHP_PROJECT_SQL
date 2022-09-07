<?php 
include 'db_connect.php';
// write query for users 
$i=$_POST['id'];
$f=$_POST['ProductName'];
$l=$_POST['CatagoryId'];
$p=$_POST['price'];
$e=$_POST['Quantity'];
$im=$_POST['img'];
$de=$_POST['description'];
$sql = "insert into product values('$i','$f','$l','$p','$e','$im','$de')";
$cnt=0;
///make query & get result 
$sql1 = 'SELECT * FROM product';
///make query & get result 
$result = mysqli_query($conn,$sql1);  
while($r=mysqli_fetch_array($result)) { 
    if($r['id']==$i){
        $cnt++;
    }
}
if($cnt>=1){
    echo '<script> alert("This product is already exist,Try another one...")</script>';
    echo '<script> window.location="addPro.php" </script>';

}
else{
    $result1 = mysqli_query($conn,$sql);
    echo '<script> alert("Product added successfully")</script>';
    echo '<script> window.location="managerpro.php" </script>';
}

