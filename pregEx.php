<?php
session_start();

try
{

    $mysqli = mysqli_connect("localhost", "root", "php123!", "phpconnection");

    if (mysqli_connect_error())
    {
        throw new Exception(mysqli_connect_error());
    }

    $regex = "/^[a-zA-Z\s]+$/";
    $regex1 = "/^[a-zA-Z\s\d\.]+$/";
    $regex2 = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]+$/";

    if (isset($_POST['submit2']))
    {
        $namee = mysqli_real_escape_string($mysqli, $_POST['name']);
        $emaila = mysqli_real_escape_string($mysqli, $_POST['email']);
        $subjecti = mysqli_real_escape_string($mysqli, $_POST['subject']);
        $mess = mysqli_real_escape_string($mysqli, $_POST['message']);

        if (preg_match($regex, $namee) && preg_match($regex1, $mess) && preg_match($regex2, $emaila) && preg_match($regex1, $subjecti))
        {
            $name = "<span style='color:green'>&#10004; Valid input</span>";
            $email = "<span style='color:green'>&#10004; Valid input</span>";
            $message = "<span style='color:green'>&#10004; Valid input</span>";
            $subject = "<span style='color:green'>&#10004; Valid input</span>";

            $query = "INSERT INTO infoFromFooter(emri,email,subjekti,mesazhi)
				    VALUES('$namee','$emaila','$subjecti','$mess')";
            mysqli_query($mysqli, $query);
            $_SESSION['name'] = $namee;
            header('location: pregEx1.php');
        }
        else if (empty($namee) || empty($emaila) || empty($subjecti) || empty($mess))
        {
            if (empty($namee))
            {
                $name = "<span style='color:red'>*Required</span>";
            }
            if (empty($emaila))
            {
                $email = "<span style='color:red'>*Required</span>";
            }
            if (empty($subjecti))
            {
                $subject = "<span style='color:red'>*Required</span>";
            }
            if (empty($mess))
            {
                $message = "<span style='color:red'>*Required</span>";
            }
        }
        else
        {
            if (!preg_match($regex, $namee))
            {
                $name = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($regex2, $emaila))
            {
                $email = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($regex1, $subjecti))
            {
                $subject = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($regex1, $mess))
            {
                $message = "<span style='color:red'>&#10006; Invalid input</span>";
            }
        }
    }
}
catch(Exception $e)
{
    print_r($e);
}

?>
