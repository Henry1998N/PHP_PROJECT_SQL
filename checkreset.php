<?php
include "db_connect.php";
$sqlemail = "SELECT * FROM customer WHERE Email = '".$_SESSION["email"]."'";
$rs = mysqli_query($conn ,$sqlemail);
$re=mysqli_fetch_array($rs);
$pass=$re['Password'];
$curpass=$_POST['curpass'];
$newpass=$_POST['newpass'];
$confpass=$_POST['confpass'];
if($curpass == $pass){
    if($confpass == $newpass){
        $update = mysqli_query($conn ,"UPDATE customer set Password= '".$newpass."' where Email ='".$_SESSION["email"]."'");
        echo "you successfully reset your password,Please login with your new password";
        header("Refresh:3 ; url=login2.php");
    }
    else{
        echo "Your new password doesn't match the confirm password";
        header("Refresh:3 ; url=reset.php");
    }
}
else{
    echo "Your Current password isn't right ";
    header("Refresh:3 ; url=reset.php");
}



?>