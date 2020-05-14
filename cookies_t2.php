<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/animate.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <script src="javascript/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
<title>(Type a title for your page here)</title>
</head>

<body>

<?Php
if(strlen(@$_COOKIE["Plus2netCookie"]) > 0 ){
echo "Welcome  " .$_COOKIE["Plus2netCookie"];

echo "<br><br><font face='Verdana'; size='5'; text-align:center; > Cookie is available. </font>";
}else{
echo " No Cookie is set ";
}
?>
<br><br><br>
<center><font face='Verdana' size='2'><a href=cookies_t1.php>Start a new cookie</a> | <a href=cookies_t2.php>Check the cookie </a> | <a href=cookies_t3.php>Remove the cookie </a>
</font></center>

</body>

</html>
