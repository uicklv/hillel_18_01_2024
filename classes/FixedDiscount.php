<?php

class FixedDiscount implements DiscountInterface
{
    private float $discount;

    public function __construct(float $discount)
    {
        $this->setDiscount($discount);
    }

    public function applyDiscount(float $total): float
    {
       return $total - $this->getDiscount();
    }

    /**
     * @param float $discount
     */
    public function setDiscount(float $discount): void
    {
        if ($discount <= 0) {
            throw new Exception('Invalid discount');
        }
        $this->discount = $discount;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }
}