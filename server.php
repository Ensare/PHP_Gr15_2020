<?php
include('sendEmail.php');
session_start();

$username = "";
$email = "";
$errors = array();
try
{
    $db = mysqli_connect("localhost", "root", "", "phpconnection");

    if (mysqli_connect_error())
    {
        throw new Exception(mysqli_connect_error());
    }

    if (isset($_POST['register']))
    {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);

        if (empty($username))
        {
            array_push($errors, "Username is required");
        }
        if (empty($email))
        {
            array_push($errors, "Email is required");
        }
        if (empty($password1))
        {
            array_push($errors, "Password is required");
        }
        if ($password1 != $password2)
        {
            array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);

        if (!$result)
        {
            throw new Exception($db->error);
        }

        $user = mysqli_fetch_assoc($result);

        if ($user)
        {
            if ($user['username'] === $username)
            {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email)
            {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0)
        {
            $password = md5($password1);

            $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            sendEmail($username, $email);
            header('location: home.php');
        }
    }
    if (isset($_POST['login']))
    {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username))
        {
            array_push($errors, "Username is required");
        }
        if (empty($password))
        {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0)
        {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1)
            {
                $_SESSION['username'] = $username;
                header('location: home.php');
            }
            else
            {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
}
catch(Exception $e)
{
    print_r($e);
}

?>
