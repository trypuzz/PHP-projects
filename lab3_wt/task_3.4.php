<?php
$i=0;
$string = htmlspecialchars($_GET["str"]);
$str = explode(" ", $string);
echo "В массиве " . count($str) . " элементa/ов<br>";

for($j=count($str)-1; $j>=0; $j--)
{
    echo "$str[$j] <br>";
}

