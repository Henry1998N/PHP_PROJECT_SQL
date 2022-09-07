<?php

include 'db_connect.php';
// write query for users 
$sql = 'SELECT * FROM manager';
///make query & get result 
$result = mysqli_query($conn,$sql);
$cnt1=0;
if(!isset($_SESSION['UsrName'])){
    $_SESSION['UsrName']="";}
    if(!isset($_SESSION['Memail'])){
        $_SESSION['Memail']="";}
if(!(isset($_SESSION["counter_load"]))){
    $_SESSION["counter_load"]=0;}
if(isset($_POST['email'])){
  if(isset($_POST['password'])){ 
    while($r=mysqli_fetch_array($result)){
        if($r['email']==$_POST['email'] && $r['Password']==$_POST['password']){
        $_SESSION["UsrName"]=$r['UsrName'];  
        $_SESSION['Memail']=$r['email']; 
        if(isset($_POST["mcheck"])){
            setcookie('Email1',$_SESSION['Memail'],time() +100000);
            setcookie('Password1',$r['Password'],time() +100000);

        }
        else{
            setcookie('Email1','',time() +100000);
            setcookie('Password1','',time() +100000);

        }
        header("Location:managerwel.php");
        }
        else if($r['email']==$_POST['email'] && $r['Password']!=$_POST['password']){
            $cnt1++;
        }
    }
}
}
if($cnt1==1){
    
    $_SESSION["Email"]=$_POST['email'];
    $sqlemail = "SELECT * FROM manager WHERE email = '".$_SESSION["Email"]."'";
    $rs = mysqli_query($conn ,$sqlemail);
    $re=mysqli_fetch_array($rs);
    $passs=$re['Password'];
    if($passs!=$_POST['password']){
        $_SESSION["counter_load"]++;
        header("Location:managerlogin.php");
    }
}
if($_SESSION["counter_load"]==3){
    $_SESSION["counter_load"]=0;
    include "functions.php";
    $x=gRndStr(10);
    $_SESSION["password1"]=$x;
    $_SESSION['UsrName']=$re['FirstName'];
    $update = mysqli_query($conn ,"UPDATE manager set Password= '".$_SESSION["password1"]."' where email ='".$_SESSION["Email"]."'");
    header("Location:managermail.php");
}

?>
