<?php
include_once "task_1.php";
    $fileManager = new FileManager();
    if (!array_key_exists("flag", $_COOKIE)){
        setcookie("flag", true);
        $fileManager->showTop();
        $fileManager->upload($_FILES);
        $fileManager->display();
        $fileManager->showBot();
    } else {
        if (!$_COOKIE["flag"]){
            setcookie("flag", true);
            $fileManager->showTop();
            $fileManager->upload($_FILES);
            $fileManager->display();
            $fileManager->showBot();
        }
    }
    if(array_key_exists('upload', $_POST)) {
        $fileManager->showTop();
        $fileManager->upload($_FILES);
        $fileManager->display();
        $fileManager->showBot();
    }
    elseif (array_key_exists('download', $_POST)){
        $fileManager->download($_POST['name']);
    }

    elseif (array_key_exists('delete', $_POST)){
        $fileManager->showTop();
        $fileManager->delete($_POST['name']);
        $fileManager->display();
        $fileManager->showBot();
    }

