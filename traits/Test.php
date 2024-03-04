<?php

trait Test
{
    private string $message = 'Test';

    private function getMessage()
    {
        return $this->message;
    }

    public function test(): void
    {
        echo "Test from Trait Test";
    }
}