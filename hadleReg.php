<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db' );
if($connection == false){
	echo 'Не вдалось підключитись';
	echo mysqli_connect_error();
	exit();
}
$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");
header('Location: http://test.ru')
?>