<?php
abstract class DB_Connector
{
    protected static function connect()
    {
        $dbServerName = $_ENV['MYSQL_HOST'];
        $dbUserName = $_ENV['MYSQL_USER'];
        $dbPassword = $_ENV['MYSQL_PASSWORD'];
        $dbName = $_ENV['MYSQL_DATABASE'];
        $dsn = 'mysql:host=' . $dbServerName . ';dbname=' . $dbName . ';charset=UTF8';
        try {
            $pdo = new PDO($dsn, $dbUserName, $dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($pdo) {
                return $pdo;
            }
        } catch (PDOException $error) {
            echo 'There was an error connecting to the database: ' . $dbName;
            echo $error->getMessage();
        }
    }
}
