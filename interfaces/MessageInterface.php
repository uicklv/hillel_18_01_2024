<?php

interface MessageInterface
{
    public function send(string $message): bool;

    public function receive(): string;
}