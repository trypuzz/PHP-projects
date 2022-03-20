<?php
$str1 = "true"; $str2 = "false";

for ($i = 1; $i < $argc; $i++) {
    $type = '';
    if ($argv[$i] == (int) $argv[$i]) {
        $type = 'Int';
    }

    elseif ($argv[$i] == (float) $argv[$i])
    {
        $type = 'Float';
    }
    else{
        if(strnatcmp($argv[$i], $str1)==0 || strnatcmp($argv[$i], $str2)==0){
            $type   = 'Boolean';
        }
        else $type = 'String';
    }
    echo $argv[$i].' : '.$type."\n";
}