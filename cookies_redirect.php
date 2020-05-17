<?Php
$name=$_POST['name'];
if(isset($name) and strlen($name) > 1){
setcookie ("YourHome", $name,time()+60*60*24*30);
//eshte vendos cookie per 30 dite, pas 30 dite kjo heket skadon.

header ("Location: cookies_t2.php"); 


}else{


}
?>

