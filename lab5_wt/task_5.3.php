<?php
$arr = Array(
    0 => Array(
        0 => 'elem',
        1 => 'elemen',
        2 => 'elemeeeeenntttt',
        3 => 'elem'
    ),
    1 => Array(
        0 => 100,
        1 => 200,
        2 => 300,
        3 => 400
    )
);

$c = array_combine($arr[0], $arr[1]);
print_r($c);



<?php
echo "Matrix: ";
$array = [
    [1, 2, 3, 4, 5, 6],
    [2, 3, 4, 5, 6, 7],
    [3, 4, 5, 6, 7, 8],
    [4, 5, 6, 7, 8, 9],
    [5, 6, 7, 8, 9, 1],
    [6, 7, 8, 9, 1, 2],
    [7, 8, 9, 1, 2, 3],
];

?>
    <html>
    <body>
    <table>
        <?php for ($i = 0; $i < 7; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 6; $j++) { ?>
                    <td>
                        <?php echo $array[$i][$j]; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    </body>
    </html>
<?php
$arr = array_unique(array_merge($array));
for($i = 0; $i < $arr.count(); $i++) {
    print_r("$arr[$i]");
}
?>