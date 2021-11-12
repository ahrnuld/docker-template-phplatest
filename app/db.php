<?php

class DB extends PDO
{
    private static DB $instance;

    public static function getInstance():DB
    {
        if (empty(self::$instance)) {
            try {
                $dbOptions = self::getConfig();

                $port = $dbOptions['port'];
                $host = $dbOptions['hostname'];
                $name = $dbOptions['name'];
                $user = $dbOptions['username'];
                $password = $dbOptions['password'];
                $charset = 'utf8mb4';

                $dsn = "mysql:host=$host;port=$port;dbname=$name;charset=$charset";

                self::$instance = new DB($dsn, $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            } catch (PDOException $pdoe) {
                echo $pdoe->getMessage();
            }
        }
        return self::$instance;
    }


    static function getConfig()
    {
        return [

                'hostname' => $_ENV['PHP_DB_HOST'],
                'port' => 3306,
                'username' => $_ENV['MYSQL_USER'],
                'password' => $_ENV['MYSQL_ROOT_PASSWORD'],
                'name' => $_ENV['MYSQL_DATABASE']
        ];
    }
}