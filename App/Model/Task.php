<?php
namespace App\Model;
class Task{
    public $name;
    public $complete;

    public function user(){
        return $this->name;
    }
}
