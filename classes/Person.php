<?php

class Person
{
    private string $name;
    private int $age;

    public static $oldAge = 65;

    public static function getOldAge(): void
    {
        echo self::$oldAge;
    }

    public function __construct(string $name, int $age)
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

    public function __set(string $name, $value): void
    {
        echo $name . PHP_EOL;
        echo $value . PHP_EOL;
    }

    public function __get(string $name)
    {
        echo $name . PHP_EOL;
    }

    public function calculateAge(): int
    {
        $age = self::$oldAge - $this->getAge();
        if ($age < 1) {
            throw new AgeException('Ви вже на пенсії !! :)))');
        }

        return $age;
    }

    public function __destruct()
    {
    }
}