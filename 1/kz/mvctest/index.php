<?php
require_once "Movie.php";

$movie=new Movie();
$movie_names=$movie->getMovieName();

if (isset($_POST['btn_add_movie'])){
    $movie_name=$_POST['movie_name'];
    $movie->addMovieName();
}

require_once "index.view.php";