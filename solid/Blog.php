<?php


interface Post
{
    public function getContent(): string;
}
class Blog implements Post
{
    public function __construct(
        private string $content
    ){}

    public function getContent(): string
    {
        return $this->content;
    }
}

class News implements Post
{
    public function __construct(
        private string $content
    ){}

    public function getContent(): string
    {
        return "<b>$this->content</b>";
    }
}

class ContentPrinter
{
    public function printContent(Post $blog): void
    {
        echo $blog->getContent();
    }
}