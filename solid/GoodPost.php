<?php

abstract class GoodPost
{
    public function __construct(
        private string $content
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }

    abstract function showContent(): void;
}

class Blog extends GoodPost
{

    function showContent(): void
    {
        echo "<b>{$this->getContent()}</b>";
    }
}

class News extends GoodPost
{

    function showContent(): void
    {
        echo "<i>{$this->getContent()}</i>";
    }
}


function showContent(GoodPost $post): void
{
   $post->showContent();
}