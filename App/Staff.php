<?php
namespace App;
class Staff{
    protected $members=[];

    public function __construct($member=[])
    {
        $this->members=$member;
    }

    public function add(Person $person){
        $this->members=$person;
    }

    public function getMembers(){
        return $this->members;
    }
}
