<?Php
$name=$_POST['name'];
if(isset($name) and strlen($name) > 1){
setcookie ("Plus2netCookie", $name,time()+60*60*24*30);
//setcookie ("Plus2netCookie", $name,time()+3600);

header ("Location: cookies_t2.php"); 


}else{


}
?>

