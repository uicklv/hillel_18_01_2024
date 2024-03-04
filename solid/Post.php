<?php

class Post
{
    public function __construct(
        private string $type,
        private string $content
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }

    public function getType(): string
    {
        return $this->type;
    }
}


function showContent(Post $post): void
{
    if ($post->getType() === 'blog') {
        echo "<b>{$post->getContent()}</b>";
    } elseif ($post->getType() === 'news') {
        echo "<i>{$post->getContent()}</i>";
    }
}