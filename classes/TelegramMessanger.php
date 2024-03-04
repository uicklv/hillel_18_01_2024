<?php

class TelegramMessanger implements MessageInterface
{

    public function send(string $message): bool
    {
        echo "send message via telegram";

        return true;
    }

    public function receive(): string
    {
        return "receive message via telegram";
    }
}