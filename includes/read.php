<?php
$var = fopen('data.txt', 'r');

while (!feof($var))
{
    echo str_replace("\r", "<br/>", fgets($var));
}

fclose($var);
?>