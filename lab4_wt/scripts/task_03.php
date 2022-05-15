<?php
require 'classes/Logger.php';

$screenLogger = new Logger();

?>
<html>
<head>
    <meta charset="UTF-8">

    <title>Lab #4_3</title>

    <link href="../styles/main.css" rel="stylesheet">
</head>
<body>

    <div class="block">
        <?php

        $screenLogger->info("Info message");
        $screenLogger->warning("Warning message");
        $screenLogger->error("Error message");

        $fileLogger = new Logger("logs/task_03.log");
        $fileLogger->info("Info message");
        $fileLogger->warning("Warning message");
        $fileLogger->error("Error message");
        $fileLogger->end();
        ?>
    </div>
    <div class="block">
        <p><a href="logs/task_03.log">File</a></p>
        <p><a href="..">Return</a></p>
    </div>
</body>
</html>
