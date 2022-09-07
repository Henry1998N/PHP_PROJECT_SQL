<html>
<head>
<title>Reset Passsword</title>
</head>
<body>
<?php 
$name=$_SESSION['FirstName'];
$paswrd=$_SESSION['password'];
$to="henry.nur137@gmail.com";
$subject="Reset Password";

$message ="hello $name  your new password is : $paswrd ";
$message .=",please log in with the new password <a href=localhost/labs/project/reset.php>here</a>";

$header="From:henry.nur137@gmail.com\r\n";
$header="Cc:henry.nur137@gmail.com\r\n";
$header .="MIME-Version:1.0\r\n";
$header .="Content-type:text/html\r\n";

$retval=mail($to,$subject,$message,$header);

if($retval==true){
    echo "We sent an email with a temp password ";
    header("Refresh:3 ; url=login2.php");
}
else{
echo "Message could not be sent...";}
?>
</body>
</html>