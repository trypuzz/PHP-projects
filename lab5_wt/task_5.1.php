<?php
$sum=0;
echo "Enter Your BD:\n";
$string = readline();

function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
    }
    return $age;
}

$now=time();
$birthday=strtotime($string);
$diff=$now - $birthday;
echo "Вам   ", floor($diff/ (60*60*24)), "  дней\n";


echo "Вам   ",calculate_age($string), "      лет" ;