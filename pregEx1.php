<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                font-size:18px;
            }
            .emri{
                border: 4px solid #742323;
                color: #742323;
                background-color: #DADADA;
                width:500px;
                height:115px;
                margin:80px auto;
                padding:12px;
            }
            body{
                background-color: #DADADA;
            }
            a{
                color:#742323;
            }
        </style>
    </head>
    <body>
    <div class="emri">
        <?php if (isset($_SESSION['name'])): ?>
            <p>Thank you for being part of us, <strong><?php echo $_SESSION['name']; ?></strong>. We hope you enjoyed our site!</p>
            <p>If you want to go back to our site click here : <a href="index.php">Your Home</a></p>
            <?php endif ?>
        </div>
    </body>
</html>
