<?php

class Movie
{
    private $movies_name = ['Black Panther', 'Transporter', 'The Flash', 'Rampage'];


    public function getMovieName()
    {
        return $this->movies_name;
    }

    public function addMovieName(){
        array_push($this->movies_name,'New Movie' );
    }
}