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
    $dbh = new PDO('mysql:host=localhost;dbname=auth', 'root', '');
    $loginStmt = $dbh->prepare("SELECT login FROM users");
    $passStmt = $dbh->prepare("SELECT pass FROM users");
    $loginStmt->execute();
    $passStmt->execute();
    $loginsRaw = $loginStmt->fetchAll( PDO::FETCH_ASSOC );
    $passwordsRaw = $passStmt->fetchAll( PDO::FETCH_ASSOC );
    $logins = [];
    $passwords = [];
    foreach($loginsRaw as $rows) {
        $logins[] = $rows['login'];
    }
    foreach($passwordsRaw as $rows) {
        $passwords[] = $rows['pass'];
    }
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if (in_array($login, $logins) && in_array($pass, $passwords) && (array_search($login, $logins) == array_search($pass, $passwords))){
        header("Location: load.php");
    } else {
        echo "Неправильные данные";
    }
}
?>
