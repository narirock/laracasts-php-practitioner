<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO Refactoring</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
        }
    </style>

    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>

<body>
<nav>
    <ul>
        <li><a href="/PDO_refactoring_failed/controllers/about.php"></a>About Page</li>
    </ul>
</nav>

<h1>Tasks</h1>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <strong>Title: </strong> <?= $task->description; ?>
        </li>

        <li>
            <strong>Due date: </strong> <?= $task->due; ?>
        </li>

        <li>
            <strong>Responsible person: </strong> <?= $task->assigned_to; ?>
        </li>

        <li>
            <strong>Status: </strong>
            <?php
            if ($task->status === true) {
                echo 'Completed &#9989' . "<br>" . "<br>";
            } else {
                echo 'Incomplete &#10060' . "<br>" . "<br>";
            }
            ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
