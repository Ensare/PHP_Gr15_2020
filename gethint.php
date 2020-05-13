<?php
$a[] = "Living Room";
$a[] = "Bedroom";
$a[] = "Kitchen";
$a[] = "Workroom";
$a[] = "Natalia";
$a[] = "Valebeck";
$a[] = "Giunta Wool";
$a[] = "Schofield";
$a[] = "Wystfield";
$a[] = "Starmore";
$a[] = "Celya";
$a[] = "Mattress";
$a[] = "Tommy Bahama";
$a[] = "Wayfair";
$a[] = "Tuft and Needle";
$a[] = "Effie";
$a[] = "Araceli";
$a[] = "Oisin";
$a[] = "Palma";
$a[] = "Kalani";
$a[] = "Edelmar";
$a[] = "Denes";
$a[] = "Kitchen Reno";
$a[] = "Kingsey Kitchen";
$a[] = "Zobel and Co Kitchen";
$a[] = "Calgary Kitchen";
$a[] = "Fitted Kitchen";
$a[] = "Beskope Kitchen";
$a[] = "room";
$a[] = "home";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>