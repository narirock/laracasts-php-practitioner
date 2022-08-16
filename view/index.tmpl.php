<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP and HTML</title>

    <style>
        header {
            background: mediumpurple;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

<header>

    <h1>
        <?= 'Hello, ' . $name . '!'; ?>
     </h1>
     
 </header>

</body>
</html>
