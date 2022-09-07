<?php
include 'db_connect.php';
// write query for users 
$sql = 'SELECT * FROM customer';
///make query & get result 
$result = mysqli_query($conn,$sql);
$cnt=0;
$cnt1=0;
if(!isset($_SESSION['LastName'])){
    $_SESSION['LastName']="";}
if(!isset($_SESSION['Phone'])){
        $_SESSION['Phone']="";}
if(!isset($_SESSION['Email1'])){
            $_SESSION['Email1']="";}
if(!isset($_SESSION['address'])){
                $_SESSION['address']="";}            
if(!isset($_SESSION['FirstName'])){
    $_SESSION['FirstName']="";}
if(!(isset($_SESSION["counter_load1"]))){
    $_SESSION["counter_load1"]=0;}
if(isset($_POST['Email'])){
  if(isset($_POST['Password'])){ 
    while($r=mysqli_fetch_array($result)){
        if($r['Email']==$_POST['Email'] && $r['Password']==$_POST['Password']){
            $_SESSION["custid"]=$r['Id'];

        $_SESSION["FirstName"]=$r['FirstName'];
        $_SESSION['LastName']=$r['LastName']; 
        $_SESSION['Phone']=$r['Phone'];
        $_SESSION['Email1']=$r['Email'];
        $_SESSION['address']=$r['Address'];
        if(isset($_POST["check"])){
            setcookie('Email',$_SESSION['Email1'],time() +100000);
            setcookie('Password',$r['Password'],time() +100000);

        }
        else{
            setcookie('Email','',time() +100000);
            setcookie('Password','',time() +100000);

        }
        header("Location:welcome.php");
        }
        else if($r['Email']==$_POST['Email'] && $r['Password']!=$_POST['Password']){
            $cnt1++;
        }
        else{
            $cnt++;
        }
    }
}
}
if($cnt==mysqli_num_rows($result)){
    echo "Your information does not exist please sign up";
    header("Refresh:2;url=login1.php");
}

if($cnt1==1){
    
    $_SESSION["email"]=$_POST['Email'];
    $sqlemail = "SELECT * FROM customer WHERE Email = '".$_SESSION["email"]."'";
    $rs = mysqli_query($conn ,$sqlemail);
    $re=mysqli_fetch_array($rs);
    $passs=$re['Password'];
    if($passs!=$_POST['Password']){
        $_SESSION["counter_load1"]++;
        header("Location:login2.php");
    }
}
if($_SESSION["counter_load1"]==3){
    $_SESSION["counter_load1"]=0;
    include "functions.php";
    $x=gRndStr(10);
    $_SESSION["password"]=$x;
    $_SESSION['FirstName']=$re['FirstName'];
    $update = mysqli_query($conn ,"UPDATE customer set Password= '".$_SESSION["password"]."' where Email ='".$_SESSION["email"]."'");
    header("Location:mail.php");
}

?>
