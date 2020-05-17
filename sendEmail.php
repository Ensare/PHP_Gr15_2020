<?php

function sendEmail($username, $email)
{

    require "phpmailer/PHPMailerAutoload.php";

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = "yourhomeofficial00@gmail.com";
    $mail->Password = "phpprojekti1!";

    $mail->setFrom("yourhomeofficial00@gmail.com", "Your Home");
    $mail->addAddress($email);
    $mail->addReplyTo("yourhomeofficial00@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "Your Home";
    $mail->Body = "<h1 align=center>Hello, $username. You have succesfully signed in to our website. To continue there, 
click the link below <a href=\"http://localhost/PHP_Gr17_2020/index.php\">Your Home</a> </h1>";

    if (!$mail->send()) {
        echo "<script>Alert('Email could not be sent') </script>";
    } else {
        echo  "Email was sent!";
    }
}

function confirmOrder($email, $username, $total)
{
    require "phpmailer/PHPMailerAutoload.php";

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = "yourhomeofficial00@gmail.com";
    $mail->Password = "phpprojekti1!";

    $mail->setFrom("yourhomeofficial00@gmail.com", "Your Home");
    $mail->addAddress($email);
    $mail->addReplyTo("yourhomeofficial00@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "Your Home";
    $mail->Body = "<h1 align=center>Hello, $username. Your order of $total $ has been succesful. You will be notified further
in the coming days. Hope you will choose us again, Your Home.</h1>";

    if (!$mail->send()) {
        echo "<script>Alert('Email could not be sent') </script>";
    } else {
        echo "<script>confirm('The status of your order will be emailed to you!')</script>";
    }
}
