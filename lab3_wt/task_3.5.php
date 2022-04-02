<?php
//declare(strict_types = 1);
$str = [];
$s=' ';
$string = htmlspecialchars($_GET["str"]);
$str = explode(" ", $string);
echo "Your array <br>";

for ($i = 0; $i <= count($str)-1; $i++)
{
    echo"<br> $str[$i] <br>";
    echo func($str[$i]);
}

function func($arg)
{
    if ($arg!=null) {
        console_log(gettype($arg));
        if (intval($arg)== 0){
            $arg = mb_strtoupper($arg);
            console_log("string: ".$arg);
            return "$arg <br>";
        }elseif (strpos(strval($arg), ",") || strpos(strval($arg), ".")) {
            for ($j = 0; $j < strlen($arg); $j++) {
                $symbol = $arg[$j];
                if ($symbol == '.' || $symbol == ',') {
                    $arg = round((float)$arg, 2);
                }
            }
            console_log("float: ".$arg);
            return "$arg <br>";
        }else{
            $arg = (int)$arg;
            $arg = $arg * 2;
            return "$arg <br>";
        }
    }
    return "$arg <br>";
}

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log('.json_encode($output, JSON_HEX_TAG).');';
    if ($with_script_tags) {
        $js_code = '<script>'.$js_code.'</script>';
    }
    echo $js_code;
}