<?php
date_default_timezone_set("Europe/Minsk");

class Logger
{
    const DEST_FILE = "file";
    const DEST_SCREEN = "screen";
    //const  $filename= "test.txt"
    function __construct($dest,  $filename= "test.txt")
    {
        if (isset ($_GET['add']) && isset($_GET['radioGroup'])) {
            $d = date('d.m.Y H.i.s');
            $msg = $d . " " . $_GET['msg'] . PHP_EOL;
            echo $msg;
            file_put_contents($this->filename = "test.txt", $msg);

        }
    }
}

?>

<html>
<title>Task3</title>
<style>
    body {
        display: flex;
        justify-content: flex-start;
        margin-top: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        margin: 15px 0 0 15px;
    }

    #textField {
        width: 300px;
    }

    #button {
        width: 50px;
    }

    #message {
        margin: 15px;
        font-size: 40px;
        color: red;
    }
</style>
<body>
<form method="get">
    <input type="text" id="textField" name="msg" value="">
    <div>
        <input type="radio" id="screenChoice" name="radioGroup" value="screen" checked>
        <label for="screenChoice">Print</label>
        <input type="radio" id="fileChoice" name="radioGroup" value="file">
        <label for="fileChoice">File</label>
        <input type="submit" id="button" name="add" value="Add">
    </div>

    <div id="message">
        <?php
        $dest = !empty($_GET['radioGroup']) ? $_GET['radioGroup'] : '';
        $logger = new Logger($dest);
        ?>
    </div>
</form>
</body>
</body>
</html>
