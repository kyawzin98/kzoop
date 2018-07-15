<?php

use MainDir\Users\Person;
use MainDir\Business;
use MainDir\Staff;

$kyaw=new Person('Kyaw Zin');

$staff=new Staff([$kyaw]);

$business=new Business($staff);

$business->hire(new Person('Mg Mg'));

//var_dump($staff);
echo "<br>";
echo "<pre>";
var_dump($business->getStaffMembers());
echo "</pre>";


