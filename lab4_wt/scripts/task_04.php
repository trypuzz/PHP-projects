<html>
<head>
    <meta charset="UTF-8">

    <title>Lab #4_4</title>

    <link href="../styles/main.css" rel="stylesheet">
</head>

<body>

<div class="block">
    <?php
    require 'classes/SmartDate.php';

    $time = new SmartDate($_POST["year"], $_POST["month"], $_POST["day"]);

    if ($time->isCorrect())
    {
    if ($time->isWeekend())
        echo "<p>Это выходной (";
    else
        echo "<p>Это рабочий день (";

    echo $time->getWeekDay().")</p>";

    if ($time->isLeap())
    echo "<p>It is leap year</p>";
    else
    echo "<p>It isn't leap year</p>";

    echo "<p>Year: ".$time->getDiff(SmartDate::YEAR)."</p>";
    echo "<p>Month: ".$time->getDiff(SmartDate::MONTH)."</p>";
    echo "<p>Day: ".$time->getDiff(SmartDate::DAY)."</p>";
    }
    else
    {
    echo "<p>Invalid date</p>";
    }
    ?>
</div>

<div class="block">
    <p><a href="task_04.html">Return</a></p>
</div>

</body>
</html>



