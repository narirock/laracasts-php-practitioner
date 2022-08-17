<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booleans</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
        }
    </style>
</head>

</body>

<ul>

   <li>
       <strong>Title: </strong> <?= $task['Title']; ?>
   </li>

    <li>
        <strong>Due date: </strong> <?= $task['Due']; ?>
    </li>

    <li>
        <strong>Responsible person: </strong> <?= $task['Assigned to']; ?>
    </li>

    <li>
        <strong>Status: </strong> <?= $task['Status'] ? 'Completed' : 'Incompleted'; ?>
    </li>

</ul>

</body>
</html>
