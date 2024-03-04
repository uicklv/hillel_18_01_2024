<?php

class Message
{
    private MessageInterface $messanger;
    public function __construct(MessageInterface $messanger)
    {
        $this->messanger = $messanger;
    }
    public function sendMessage(string $message): bool
    {
        return $this->messanger->send($message);
    }

    public function receiveMessage(): string
    {
        return $this->messanger->receive();
    }
}