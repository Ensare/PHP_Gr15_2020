<?php
	session_start();

	// print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
	<style>
		h1
		{
			font-family: Alegreya Sans SC; 
	text-align: center;
	font-size: 30px;
	color: #911203;
	padding: 50px;

		}
	</style>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
</body>
</html>