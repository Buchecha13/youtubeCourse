<?php

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$app = $name . '|' . $email . '|' . $text;

var_dump($app);

file_put_contents('apps.txt', $app, FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        <input type="text" name="name"><br>
        <input type="email" name="email"><br>
        <textarea name="text" cols="40" rows="3"></textarea><br>
        <button type="submit">Отправить</button>
    </form>

</body>

</html>