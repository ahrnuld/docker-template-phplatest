<?php
class HomeController {
    // public function index() {
    //     require __DIR__ . '/../view/home/index.php';
    // }
    public function index() {
        require("../repository/HomeRepository.php");
        $repository = new HomeRepository();
        $games = $repository->getAllGames();
         require __DIR__ . '/../view/home/index.php';

    }
}

?>