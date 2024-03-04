<?php

interface SenderInterface
{
    public function send(string $message): bool;
}

interface SaverInterface
{
    public function save(array $data): bool;
}


class Sender implements SenderInterface
{

    public function send(string $message): bool
    {
        // TODO: Implement send() method.
    }
}