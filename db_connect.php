<?php 
/// connect to database
$conn = mysqli_connect('localhost', 'henry', 'HENRY137$$','fproject');
///check connection
if(!$conn){
	echo 'Connection error : '.mysqli_connect_error();
}
?>