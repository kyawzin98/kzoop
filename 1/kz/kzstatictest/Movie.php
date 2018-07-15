<?php
class Movie
{
    private static $movies_name = ['Black Panther', 'Transporter', 'The Flash', 'Rampage'];
    public static $new_movie;


    public static function getMovieName()
    {
        return self::$movies_name;
    }

    public static function addMovieName($movie_name){
        self::$new_movie=$movie_name;
        array_push(self::$movies_name,self::$new_movie);
    }
}
//class foo {
//    public $bar = "fizzbuzz";
//}
//
//class myClass {
//    static public $array = array();
//    static public function init() {
//        while ( count( self::$array ) < 3 )
//            array_push( self::$array, new foo() );
//    }
//}
//
//myClass::init();
//print_r( myClass::$array );


//Movie::addMovieName();
//print_r(Movie::getMovieName());