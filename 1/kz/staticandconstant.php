<?php
class Math{
    public static function sum(...$num){
        return array_sum($num);
    }
}
class Person{
    public $age=1;

    public function haveBirthday(){
        $this->age++;
    }

    public function getAge(){
        return $this->age;
    }
}


class BankAccount{
//    private static $tax=0.9;
    const TAX=1.5;
}
//$math=new Math();
//echo $math->sum(1,2,3,4,5);

//echo Math::sum(1,2,3,4,5);
//
//$kyaw=new Person();
//$kyaw->haveBirthday();
//echo $kyaw->getAge();

//echo Person::$age;
echo BankAccount::TAX;



