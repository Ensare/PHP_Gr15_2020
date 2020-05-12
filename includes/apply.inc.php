<?php

if(isset($_POST['submit'])){

    $name=$_POST['namee'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephonee'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $cv = $_POST['cv'];
    $gender = $_POST['type'];
    $birthdate = $_POST['Birthdate'];
try{
    if(empty($name) || empty($lastName) || empty($email) || empty($telephone) || empty($cv)){
    header("Location: ../apliko_per_pune.php?applyForJob=error");   
    }
 else{
    $result = "<div style='border:solid 2px; width:300px;padding:3px; margin: 0 auto; color:green'>Congrats! You applied for job successfully!</div>";
    echo $result;
}
} 
catch(Exception $e){
    echo $e->getMessage();
}

}
?> 