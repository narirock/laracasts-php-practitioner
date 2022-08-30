<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Routers and connectors</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <li>
                <a style="text-decoration: none; color: black" href="about.view.php">About Page</a>
            </li>
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
