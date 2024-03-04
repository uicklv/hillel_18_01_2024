<?php

class AgeException extends Exception
{
    public function prepareError(): array
    {
        return ['errors' => $this->getMessage()];
    }
}