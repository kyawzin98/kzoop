<?php

namespace Core\DB;
/**
 * Created by PhpStorm.
 * User: kyawzin
 * Date: 7/13/18
 * Time: 3:55 PM
 */
class Connection
{
    public static function make($dsn, $username, $password)
    {
        try {
            return new \PDO($dsn, $username, $password);
//        return new PDO("mysql:host=localhost;dbname=todo",'root','root');
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}