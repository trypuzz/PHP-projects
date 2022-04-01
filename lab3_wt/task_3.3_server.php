<?php
$name = "не определено";
$age = "не определен";
if (isset($_POST["num1"])) {
    $num1 = $_POST["num1"];
}
if (isset($_POST["num2"])) {
    $num2 = $_POST["num2"];
}
echo "num1: $num1 <br> num2: $num2";
    $n1 = (string)$num1;
    $n2 = (string)$num2;
    $arr1 = str_split($n1);
    $arr2 = str_split($n2);
    $res = (array_diff($arr2, $arr1));
    $result = array_merge($arr1,$res);
echo "<br>";
print_r($result);
?>