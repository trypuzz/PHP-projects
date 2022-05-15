<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Login:
    <input type="text" name="login">
    <br>
    Password:
    <input type="password" name="password">
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (array_key_exists("flag", $_COOKIE)){
        setcookie("flag", false);
    }
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $fp = @fopen("loginpass.txt", 'r');
    if ($fp) {
        $string = str_replace("\n", " ", fread($fp, filesize("loginpass.txt")));
        $string = str_replace("\r", "", $string);
        $array = explode(" ", $string);
    }
    for ($i = 0; $i < count($array); $i++){
        if ($i%2!==0){
            $passwords[] = $array[$i];
        }
        else {
            $logins[] = $array[$i];
        }
    }
    if (in_array($login, $logins) && in_array($pass, $passwords) && (array_search($login, $logins) == array_search($pass, $passwords))){
        header("Location: load.php");
    } else {
        echo "Неправильно введены данные";
    }
}
?>
