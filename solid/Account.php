<?php
class Money
{

}

class Dolar extends Money
{

}



class Account
{
    public int|float $balance = 0;

    public function putMoney(int|float $money): void
    {
        if ($money <= 0) {
            throw new Exception('Invalid value');
        }

        $this->balance += $money;
    }

    public function getMoney(int|float $money): Money
    {
        $result = $this->balance - $money;

        if ($result < 0) {
            throw new Exception('Invalid value');
        }

        $this->balance = $result;
        return $result;
    }
}

class SubAccount extends Account
{
    public int|float $balance = 0;
    public function putMoney(int|float $money): void
    {
        if ($money <= 0) {
            throw new Exception('Invalid value');
        }

        //Посилення передумови
        if ($money > 1000) {
            throw new Exception('Invalid value');
        }

        $this->balance += $money;
    }

    public function getMoney(int|float|null $money): Dolar
    {
        $result = $this->balance - $money;
        $this->balance = $result;

        return $result;
    }
}


