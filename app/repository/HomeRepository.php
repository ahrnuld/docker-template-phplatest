<?php
require_once("Repository.php");

class HomeRepository extends Repository
{
    public function getAllGames()
    {
        require("../model/game.php");
        $stmt = $this->connection->prepare("SELECT * FROM game");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'game');
        $result = $stmt->fetchAll();
        return $result;
    }
}
