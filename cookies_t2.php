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
<title></title>
<style>
p
{
    text-align:center;
    font-family: Alegreya Sans SC; 
    font-size:25px;
    padding: 0 2px 0 20px;
    padding-top: 20px;
    margin: 20px 59px 20px 20px;

}
a 
{
    font-size: 25px;
    margin: 200px 20px;
}
</style>
</head>

<body>

<?Php
if(strlen(@$_COOKIE["Plus2netCookie"]) > 0 ){
echo "<p> Welcome </p>  " .$_COOKIE["Plus2netCookie"];

echo "<br><br><p> Cookie is available. </p>";
}else{
echo "<p> No Cookie is set</p> ";
}
?>
<br><br><br>
<p style="text-align:center;  "><a href=cookies_t1.php>Start a new cookie</a> | <a href=cookies_t2.php>Check the cookie </a> | <a href=cookies_t3.php>Remove the cookie </a>
</p>

</body>

</html>
