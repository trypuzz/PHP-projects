<?php
$array = array(
    1=>  array(1, 2, 3, 4, 5, 'red'),
    2=> array(6, 7, 8, 9, 10, 'blue'),
    3=> array(11, 12, 13, 14, 15, 'green'),
    4=> array(16, 17, 18, 19, 20, 'purple'),
    5=> array(21, 22, 23, 24, 25, 'yellow'),
    6=> array(26, 27, 28, 29, 30, 'yellow'),
    7=> array(26, 27, 28, 29, 30, 'yellow'),
);
$color = array('red','blue','green','purple','yellow');
?>

<table class="arr">
    <?php $i = 0?>
    <?php foreach ($array as $items): ?>
        <?php $i += 1?>
        <tr class=<?php echo '"i' . $i . '"'; ?>>
            <?php foreach ($items as $row): ?>
                <td><?php echo $row; ?></td>
            <?php endforeach; ?>
        </tr>

    <?php endforeach; ?>
</table>

<style>
    .arr {
        width: 100%;
    }

    .arr td {
        width: 10px;
        border: 5px solid #ddd;
        padding: 7px 10px;
    }

    .arr {
        background-color: <?php echo $color[4]; ?>;
    }

    .i1 {
        background-color: <?php echo $color[0]; ?>;
    }

    .i2 {
        background-color: <?php echo $color[1]; ?>;
    }

    .i3 {
        background-color: <?php echo $color[2]; ?>;
    }

    .i4 {
        background-color: <?php echo $color[3]; ?>;
    }

</style>