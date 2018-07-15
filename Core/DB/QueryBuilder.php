<?php

namespace Core\DB;
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function Task($sql_query)
    {
        $statement = $this->pdo->prepare($sql_query);

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS, '\App\Model\Task');

    }
//    public function sqlInsert($table){
//        $sql="Insert into $table (id,name,complete) VALUES ()";
//    }
    public function sqlSelect($table, $condition = '')
    {
        return $sql = "Select * From " . $table .' '. $condition;
    }
}