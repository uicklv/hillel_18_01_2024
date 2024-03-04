<?php

class Dynamic
{
    private array $data;

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function __toString(): string
    {
        $data = $this->data;
        $string = '';
        foreach ($data as $key => $value) {
            $string .= "property: $key value: $value" . PHP_EOL;
        }
        return $string;
    }
}


