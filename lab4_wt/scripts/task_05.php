<?php
require 'classes/CryptoManager.php';

error_reporting(0);

if ($_POST["cipher"] == "aes")
    $cipher = CryptoManager::AES;
else
    $cipher = CryptoManager::DES;

$manager = new CryptoManager($cipher, $_POST["key"]);
$cipherText = $manager->encrypt($_POST["plainText"]);

echo "<h1 style='text-transform: uppercase;'>".$_POST["cipher"]."</h1>";
echo "<p>PLAIN: ".$_POST["plainText"]."</p>";
echo "<p>KEY: ".$_POST["key"]."</p>";


if (isset($_POST['button-encode']))
    echo "<p>CIPHER: ".$manager->encrypt($_POST["plainText"])."</p>";
else if (isset($_POST['button-decode']))
    echo "<p>MESSAGE: ".$manager->decrypt($_POST["plainText"])."</p>";

echo "<a href='task_05.html'>Return</a>";
