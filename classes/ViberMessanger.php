<?php

class ViberMessanger implements MessageInterface
{

    public function send(string $message): bool
    {
        echo "Send message via Viber";

        return true;
    }

    public function receive(): string
    {
        return "Receive message via viber";
    }
}