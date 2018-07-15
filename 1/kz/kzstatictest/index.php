<?php
require_once "Movie.php";

$movie_names=Movie::getMovieName();

if (isset($_POST['btn_add_movie'])){
    $movie_name=$_POST['movie_name'];
    Movie::addMovieName($movie_name);
}

require_once "index.view.php";