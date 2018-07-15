<?php
use App\Person;
use App\Staff;
use App\Business;
use App\Setting\User;


$person=new Person('Kyaw Zin');

$staff=new Staff($person);

$business=new Business($staff);

$business->hire($person);

$members=$business->getStaffMembers();

$user=new User();
$user->setName();
$myname=$user->getName();

print "<pre>";
var_dump($members);
var_dump($myname);
print "</pre>";



