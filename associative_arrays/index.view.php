<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative arrays</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
        }
    </style>
</head>

</body>

<ul>
    <?php
    foreach ($person as $feature => $value) {
        echo "<li>" . "<b>" . $feature . "</b>" . ': ' . $value . "</li>";
    }
    ?>
</ul>

</body>
</html>
