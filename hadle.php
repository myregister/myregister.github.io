<?php
include('includes/connection.php');

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if( mysqli_num_rows($count) == 0 ){
	header('Location: http://test.ru');
}
else{
	header('Location: http://test.ru/web.php');
}
?>
