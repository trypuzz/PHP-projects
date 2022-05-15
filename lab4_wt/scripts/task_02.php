<html>
<head>
    <meta charset="UTF-8">

    <title>Lab #4_1</title>

    <link href="../styles/main.css" rel="stylesheet">
</head>

<body>

<div class="block">
    <?php
    require 'classes/SafeFormBuilder.php';

    $formBuilder = new SafeFormBuilder(FormBuilder::METHOD_POST, '/destination.php', 'Send!');
    $formBuilder->addTextField('somePostName', 'Default post value');
    $formBuilder->addRadioGroup('somePostRadioName', ['A', 'B', 'C', 'D', 'E']);
    $formBuilder->addTextField('otherPostName', 'Other post value');
    $formBuilder->getForm();
    ?>
</div>

<div class="block">
    <?php
    $formBuilder = new SafeFormBuilder(FormBuilder::METHOD_GET, '/destination.php', 'Send!');
    $formBuilder->addTextField('someGetName', 'Default get value');
    $formBuilder->addRadioGroup('someGetRadioName', ['A', 'B', 'C', 'D', 'E']);
    $formBuilder->addTextField('otherGetName', 'Other get value');
    $formBuilder->getForm();
    ?>
</div>

<div class="block">
    <p><a href="..">Return</a></p>
</div>

</body>
</html>