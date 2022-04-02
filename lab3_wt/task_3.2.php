<?php
$i=0;
$k=0;
$str = [];
if(isset($_GET["str"])){

    $str = $_GET["str"];
}
echo "В массиве " . count($str) . " элементa/ов<br>";

foreach($str as $stroka)
{
    $i++;
    if ($i % 3 == 0) {
        $stroka = mb_strtoupper($stroka);
    }
    for ($j = 0; $j < strlen($stroka); $j++) {
        if ((($j +1)% 3 == 0) && ($j != 0)) {
            echo '<b style="color: purple">'.$stroka[$j].'</b>';
        } else echo $stroka[$j];
    }
    echo '<br>';
}