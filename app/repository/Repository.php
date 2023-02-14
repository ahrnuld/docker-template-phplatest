<?php


class Repository
{

    protected $connection;

    public function __construct()
    {
        require_once("../public/config.php");

        try {

            $this->connection = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
