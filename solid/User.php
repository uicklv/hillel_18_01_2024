<?php

class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception('Invalid name');
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

//    public static function save(array $data): bool
//    {
//        //todo save to DB
//    }
//
//    public static function find(int $id): object
//    {
//        //todo find user by id in DB
//    }
}