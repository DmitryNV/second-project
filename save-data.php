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
    Спасибо за ваши данные
<a href="/">Вернуться на главную</a>
</body>
</html>
<?php
$parameters = $_POST;
$file = fopen(__DIR__ . '/vacancies.csv', 'a+');
fputcsv($file, $parameters);
fclose($file);