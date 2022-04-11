<?php
$data = readline();
foreach (count_chars($data, 1) as $i => $val) {
    echo "\"", chr($i), "\" встречается в строке $val раз(а).\n";
}
for($i=0;$i<=strlen($data)-1;$i++){
    echo $data[$i], "\n";
}
