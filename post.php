<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$database = "test";
	$username = "root";
	$password = "Skull94519!";
	$link = mysqli_connect($servername, $username, $password, $database);
	?>
	<div style="width:100%; height:max; display: flex;">
		<div style="width: 33%;"></div>
		<div style="width: 34%">
			<?php
			$query = mysqli_query($link, "SELECT * FROM posts");
			$result = mysqli_fetch_assoc($query);
			echo $result['code'];
			?>
		</div>
		<div style="width:33%">
			<form method="POST">
				<input type="submit" name="sesdes" value="Выход">
			</form>
			<?php 
			session_start();
			echo $_SESSION['login']; 
			if (isset($_POST['sesdes']))
			{
				session_destroy();
				header('location:index.php');
			}
			if(!isset($_SESSION['login']))
			{  
				header('location: index.php');
			} 
			?>

		</div>
	</div>
</body>
</html>