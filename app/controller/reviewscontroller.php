<?php
class ReviewsController {

    public function index() {
        require("../repository/ReviewRepository.php");
        $repository = new ReviewRepository();
        $gameid = $_GET['gameid'];
        $games = $repository->getSelectedGame($gameid);
        $reviews = $repository->getReviewsForSelectedGame($gameid);

        require __DIR__ . '/../view/home/reviews.php';
    }
}

?>