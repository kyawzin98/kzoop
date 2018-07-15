<?php
/**
 * Created by PhpStorm.
 * User: kyawzin
 * Date: 7/12/18
 * Time: 4:47 PM
 */

function connectToDB($dsn,$username,$password){
    try{
        return new PDO($dsn,$username,$password);
//        return new PDO("mysql:host=localhost;dbname=todo",'root','root');
    }catch (PDOException $e){
        die($e->getMessage());
    }
}

function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}


//$connected=connectToDB('mysql:host=localhost;dbname=todo','root','root');
//if ($connected){
//    echo "Connected";
//}