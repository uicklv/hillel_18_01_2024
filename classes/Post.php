<?php

abstract class Post
{
    private string $title;
    private string $content;
    public function __construct(string $title, string $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        if (strlen($title) < 2) {
            throw new Exception('Invalid title');
        }
        $this->title = $title;
    }


    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        if (strlen($content) < 5) {
            throw new Exception('Invalid content');
        }

        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public abstract function getInfo(): string;
}