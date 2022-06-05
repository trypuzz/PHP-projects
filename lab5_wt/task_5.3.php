
<?php
echo "Matrix: ";
$array = [
    [1, 2, 3, 1, 2, 3],
    [2, 3, 1, 2, 3, 7],
    [3, 1, 3, 2, 7, 8],
    [1, 2, 3, 7, 8, 9],
    [2, 3, 7, 8, 9, 1],
    [3, 7, 8, 9, 1, 2],
    [7, 8, 9, 1, 2, 3],
];


for($i = 0; $i < count($array); $i++) {
    $arr = array_merge($array[$i]);
}
$arr = array_unique($arr);
for($i = 0; $i <  count($arr); $i++) {
    print_r("$arr[$i]");
}
?>