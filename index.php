<?php

require 'src/Person.php';
require 'src/Staff.php';
require 'src/Business.php';

$steven = new Person('Steven Ennis');
$staff = new Staff([$steven]);
$andela = new Business($staff);
// $andela->hire($steven);
$andela->hire(new Person('Julius W'));

// var_dump($staff);

var_dump($andela->getStaffMembers());
