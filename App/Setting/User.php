<?php
namespace App\Setting;
class User{
    protected $name='Venom';
    public function setName(){
        $this->name;
    }

    public function getName(){
        return $this->name;
    }
}
