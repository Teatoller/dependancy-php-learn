<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->member = $members;
    }

    public function add(Person $person)
    {
        $this->member[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$steven = new Person('Steven Ennis');
$staff = new Staff([$steven]);
$andela = new Business($staff);
// $andela->hire($steven);
$andela->hire(new Person('Julius W'));

// var_dump($staff);

var_dump($andela->getStaffMembers());
