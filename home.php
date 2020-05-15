<?php 
   session_start(); 
   
   if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: login.php');
   }

   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="/formaCss.css">
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
         <p>Hello <strong><?php echo $_SESSION['username']; ?></strong>! Check your email for more details.
    <?php endif ?>
      </div>
   </body>
</html>