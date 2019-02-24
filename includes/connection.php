<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db' );
if($connection == false){
	echo 'Не вдалось підключитись';
	echo mysqli_connect_error();
	exit();
}
?>