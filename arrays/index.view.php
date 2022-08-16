<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
        }
    </style>
</head>

</body>

<header>
    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>" . "<b>" . 'Name: ' . "</b>" . $name . "<br>" . "</li>";
        }
        ?>
    </ul>
</header>

</body>
</html>
