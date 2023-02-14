<?php
require_once("Repository.php");

class ReviewRepository extends Repository
{
    public function getReviewsForSelectedGame($gameid)
    {
        require("../model/review.php");
        $stmt = $this->connection->prepare("SELECT * FROM review WHERE gameID ='$gameid' ");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'review');
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getSelectedGame($gameid){
        require("../model/game.php");
        $stmt = $this->connection->prepare("SELECT * FROM game WHERE gameID ='$gameid' ");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'game');
        $result = $stmt->fetchAll();
        return $result;
    }
}