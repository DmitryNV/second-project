<?php
$user = $_POST;
echo 'data: ' . PHP_EOL;
echo '<pre>';
print_r($user);
echo '</pre>';
$table = $user['table'];

if(!$table) {
    echo 'no "table" name in data!' . PHP_EOL;
}
unset($user['table']);
$file = fopen(__DIR__ . "/back/data/$table.csv", 'a+');
fputcsv($file, $user);

fclose($file);
$user = (object) $user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dmitriy Novikov">
    <meta name="description" content="This page about products which contains the information about fast food">
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="css/main.css?v=5">
    <title>
        Есть поесть!
    </title>

    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    Спасибо за ваши данные, <?=$user->firstname . ' ' . $user->lastname?>
    <div>
        <a href="/">Вернуться на главную</a>
    </div>
<a href="pattern.html">Вернуться на петтерн</a>
</body>
</html>

