<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no"/>
	<title> Login </title>
	<style>
		body{
			font-size: 25px;
			text-align: center;
			background color: #0000;
			font-family: "Sofia", sans-serif;
			color: red;
			background-image: url("pattern.jpeg");

		}
	</style>
</head>
<body style="background-size: cover;">
	<div class="container">
		<h1> Login </h1>
	<form method="POST" action="aksi_login.php">
		<label>username : </label>
		<input name="username" type="text" placeholder="username kamu">
		<br>
		<label>password : </label>
		<input name="password" type="password" placeholder="password kamu">
		<br>
		<br>
		<button>masuk!</button>
	</form>
	</div>

</body>
</html>