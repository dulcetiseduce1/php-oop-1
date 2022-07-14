<?php

require_once("class/Movie.php");

$movie_1 = new Movie("Titanic", "S. Spielberg", 1997, 200000000, 2000000000);
$movie_2 = new Movie("The Exorcist", "W. Friedkin", 1973, 12000000, 441000000);
$movie_3 = new Movie("A Clockwork Orange", "S. Kubrick", 1971, 1300000, 114000000);

$movie_1->setProfit(); $movie_2->setProfit(); $movie_3->setProfit(); 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHPOOP1</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    
  </head>

  <body>
    <main>
      <div class="container my-5">
        <div class="row row-cols-6 mb-3">
          <div class="col">
            <h5>Title</h5>
          </div>

          <div class="col">
            <h5>Director</h5>
          </div>

          <div class="col">
            <h5>Year</h5>
          </div>

          <div class="col">
            <h5>Budget ($)</h5>
          </div>

          <div class="col">
            <h5>Box Office ($)</h5>
          </div>

          <div class="col">
            <h5>Profit ($)</h5>
          </div>
        </div>

        <div class="row row-cols-6 mb-2">
          <div class="col">
            <span><?php echo $movie_1->getTitle() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_1->getDirector() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_1->getYear() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_1->getBudget() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_1->getBoxOffice() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_1->getProfit() ?></span>
          </div>
        </div>

        <div class="row row-cols-6 mb-2">
          <div class="col">
            <span><?php echo $movie_2->getTitle() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_2->getDirector() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_2->getYear() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_2->getBudget() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_2->getBoxOffice() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_2->getProfit() ?></span>
          </div>
        </div>

        <div class="row row-cols-6">
          <div class="col">
            <span><?php echo $movie_3->getTitle() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_3->getDirector() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_3->getYear() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_3->getBudget() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_3->getBoxOffice() ?></span>
          </div>
          <div class="col">
            <span><?php echo $movie_3->getProfit() ?></span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
