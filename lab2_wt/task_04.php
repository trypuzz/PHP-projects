<?php
$num1 = (int)$argv[$argc - 1]; $num3=0;

do {
    $num2= $num1 % 10;
    $num3 += $num2;
    $num1= $num1/10;
}  while ($num1 >=1);

echo $num3;