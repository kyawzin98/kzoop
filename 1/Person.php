<?php

class Person
{
    public $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function SetAge($age)
    {
        if ($age < 18) {
            throw new Exception('Person is not old Enough');
        }
        $this->age = $age;
    }

    public function GetAge()
    {
        return $this->age * 365;
    }
}

$person = new Person('Kyaw Zin');
$person->SetAge(19);
//$person->age=4;
//var_dump($person->age);
var_dump($person->GetAge());