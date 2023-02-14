<!-- <?php
require __DIR__ . '/../../config.php';
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href= "/css/reviewStyle.css">

    <title>High-Score</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#">Container</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>


    <!-- Display the game selected -->
    <div class="row" id="gamecontainer">
        <?php
        // $gameid = $_GET['gameid'];

        // $games = $db->query("SELECT * FROM game WHERE gameID ='$gameid' ");

        foreach ($games as $game) {
        ?>
            <div class="card mb-3" style=>
                <div class="row g-0">
                    <div class="col-md-4">
                        <!-- Since images are stored in the database as a LONGBLOB value, the data, charset and base64 parameters are 
                        used to display the image -->
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($game->image); ?>" class="img-fluid rounded-start" alt="Loading image...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $game->title ?> </h5>
                            <p class="card-text"><?= $game->genre ?> </p>
                            <!-- Display the description -->
                        </div>

                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="row" id="reviewslist">
    <?php 
        foreach ($reviews as $review) {
            ?>
            <div class="card mb-3"  >
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="score"> <?= $review->score ?> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $review->title ?> </h5>
                            <p class="card-text"><?= $review->body ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php    
        }
        ?>
    </div>


</body>

</html>