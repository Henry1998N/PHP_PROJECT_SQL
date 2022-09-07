<?php 
/// connect to database
$conn = mysqli_connect('', '', '','');
///check connection
if(!$conn){
	echo 'Connection error : '.mysqli_connect_error();
}
?>