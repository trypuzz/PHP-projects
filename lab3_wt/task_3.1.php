<?php
$string = htmlspecialchars($_GET["city"]);
$pieces = explode(" ", $string);
sort($pieces);
$result = array_unique($pieces);
print_r($result);

