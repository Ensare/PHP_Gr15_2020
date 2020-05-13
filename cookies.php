<?php

$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$submit=$_POST['Submit'];


if(isset($name) and strlen($name) > 1){
setcookie ("Plus2netCookie[name]", $name);
setcookie ("Plus2netCookie[city]", $email);
setcookie ("Plus2netCookie[state]", $subject);
setcookie ("Plus2netCookie[zip]", $submit);
header ("Location: cookies_t2.php"); 


}else{
echo " Error in redirection ";

}


?>