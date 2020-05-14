<?php 
   session_start(); 
   
   if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: login.php');
   }
   if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="css/formaCss.css">
      <style>
         .content{
         width:500px;
         margin: 100px auto;
         padding:25px;
         border: 6px solid #742323;
         border-radius: 10px 10px 10px 10px;
         }
      </style>
   </head>
   <body>
      <div class="content">
         <?php  if (isset($_SESSION['username'])) : ?>
         <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> click here to continue to our page <a href="index.php">Your Home</a></p>
		 <p> <a href="home.php?logout='1'">Logout</a> </p>
    <?php endif ?>
      </div>
   </body>
</html>