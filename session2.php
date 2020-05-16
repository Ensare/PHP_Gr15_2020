<?php
	session_start();

	$_SESSION['name'] ;

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>
<style>
h5
{
	font-family: Alegreya Sans SC; 
	text-align: center;
	font-size: 30px;
	color: #911203;
	padding: 50px;
}
a
{
	background-color: #911203;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 10px 600px;
}
a:link {
  color: red;
}

a:visited {
  color: black;
}

a:hover {
  color: white;
}

a:active {
  color: yellow;
}
</style>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?></h5>
<a href="session3.php">Click me</a>
</body>
</html> 