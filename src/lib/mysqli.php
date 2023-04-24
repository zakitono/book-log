<?php

require __DIR__ . '/../vendor/autoload.php';

function dbConnect()
{
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    $db_HOST = $_ENV['DB_HOST'];
    $db_Username = $_ENV['DB_USERNAME'];
    $db_Password = $_ENV['DB_PASSWORD'];
    $db_Database = $_ENV['DB_DATABASE'];

    $link = mysqli_connect($db_HOST, $db_Username, $db_Password, $db_Database);

    if (!$link) {
        echo 'Error: データベースに接続できませんでした。' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}
