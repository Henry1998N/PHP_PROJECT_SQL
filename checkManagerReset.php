<?php
include "db_connect.php";
$sqlemail = "SELECT * FROM manager WHERE email = '".$_SESSION["Email"]."'";
$rs = mysqli_query($conn ,$sqlemail);
$re=mysqli_fetch_array($rs);
$pass=$re['Password'];

$curpass=$_POST['curpass1'];
$newpass=$_POST['newpass1'];
$confpass=$_POST['confpass1'];
//echo $curpass;
if($curpass == $pass){
    if($confpass == $newpass){
        $update = mysqli_query($conn ,"UPDATE manager set Password= '".$newpass."' where email ='".$_SESSION["Email"]."'");
        echo "you successfully reset your password,Please login with your new password";
        header("Refresh:3 ; url=managerlogin.php");

    }
    else{
        echo "Your new password doesn't match the confirm password";
        header("Refresh:3 ; url=managerreset.php");
    }
}
else{
    echo "Your Current password isn't right ";
    header("Refresh:3 ; url=managerreset.php");
}



?>