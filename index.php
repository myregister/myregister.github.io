<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Логін</title>
</head>
<body>
	<form method="POST" action="/hadle.php" id='form'>
	<input type='text' placeholder="Ваш логін" name="login" id='inputOne'><br>
	<input type="password" placeholder="Ваш пароль" name="password" id='inputTwo'>
	<input type='submit' value='Увійти' id='button'>
</form>
<a href='registration.php'>
<input type='submit' value='Реєстрація' id='buttonTwo'>
</a>
	<style>
		#form{
			position: absolute;
			border: 0.5px solid #000000;
			left: 330px;
			top: 170px;
			height: 230px;
			width: 165.5px;
		}
		#inputOne{
			margin-bottom: 3px;
			position: absolute;
			top: 20px;
			text-align: center;
		}
		#inputTwo{
			margin-bottom: 3px;
			position: absolute;
			top: 50px
		}
		#button{
			position: absolute;
			top: 120px;
			right: 57px;
		}
		#buttonTwo{
			position: absolute;
			top: 340px;
			left: 370px;

		}
		body{
			background-color: grey;
		}
	</style>
	<script>
		alert(<?php
			echo 'vasya'
			?>);
	</script>
</body>
</html>