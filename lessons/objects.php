<?php

class Person
{
    private string $name;

    private int $age;

    public function __construct(string $name, ?int $age = null)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception('Invalid name');
        }
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age < 1) {

        }
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}


$person = new Person('Jim', 25);
$person2 = new Person('Mike', 30);


function showPerson(Person $person): void
{
    var_dump($person);
}

showPerson($person);
showPerson($person2);
