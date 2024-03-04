<?php

class PercentageDiscount implements DiscountInterface
{

    private int $percentage;

    private float $limit;

    public function __construct(int $percentage, float $limit)
    {
        $this->setPercentage($percentage);
        $this->setLimit($limit);
    }

    public function applyDiscount(float $total): float
    {
       if ($total < $this->getLimit()) {
           return $total;
       }

       return $total - $total * ($this->getPercentage() / 100);
    }

    /**
     * @param float $limit
     */
    public function setLimit(float $limit): void
    {
        if ($limit <= 0) {
            throw new Exception('Invalid limit');
        }
        $this->limit = $limit;
    }

    /**
     * @param int $percentage
     */
    public function setPercentage(int $percentage): void
    {
        if ($percentage <= 0 || $percentage > 100) {
           throw new Exception('Invalid percentage');
        }
        $this->percentage = $percentage;
    }

    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }
}