<?php 
include 'db_connect.php';
// write query for users 
$i=$_POST['id'];
$f=$_POST['fname'];
$l=$_POST['lname'];
$p=$_POST['phone'];
$e=$_POST['email'];
$pass=$_POST['password'];
$a=$_POST['address'];
$sql = "insert into customer values('$i','$f','$l','$p','$e','$pass','$a')";
$cnt=0;
///make query & get result 
    // write query for users 
    $sql1 = 'SELECT * FROM customer';
    ///make query & get result 
    $result = mysqli_query($conn,$sql1);  
    while($r=mysqli_fetch_array($result)) { 
        if($r['Id']==$i || $r['Email']==$e){
            $cnt++;
        }
    }
    if($cnt>=1){
        echo '<script> alert("Your info is exist please try again")</script>';
        echo '<script> window.location="signup1.php" </script>';

    }
    else{
        $result = mysqli_query($conn,$sql);
        echo '<script> alert("your information has been added successfully")</script>';
        echo '<script> window.location="login2.php" </script>';
    }
?>

    


