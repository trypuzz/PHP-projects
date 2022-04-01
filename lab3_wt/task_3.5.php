<?php
//declare(strict_types = 1);
$str = [];
$s=' ';
$string = htmlspecialchars($_GET["str"]);
$str = explode(" ", $string);
echo "Your array <br>";

for ($i = 0; $i <= count($str); $i++)
{
    echo "<br> $str[$i] <br>";

    if ($str[$i] == (int)$str[$i]) //ЕСЛИ ТУТ
    {
        $str[$i] = (int)$str[$i] * 2;
    }
    elseif ($str[$i] == (float)$str[$i]) //И ТУТ ЗАМЕНИТЬ == НА ===, ТО
    {
        $str[$i] = round((float)$str[$i], 2);
    } else $str[$i] = mb_strtoupper((string)$str[$i]); //ДЛЯ СТРОК ВСЁ БУДЕТ ВЫПОЛНЯТЬСЯ
    echo "$str[$i] <br>"; //ИНАЧЕ ЖЕ БУДЕТ КОРРЕКТНАЯ РАБОТА ТОЛЬКО ДЛЯ ЧИСЕЛ
}

