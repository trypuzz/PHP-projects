<?php

$rows = 7; // количество строк, tr
$cols = 20; // количество столбцов, td

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз
