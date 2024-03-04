<?php

class Blog extends Post
{
    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();

        return "<h3>$title</h3><p>$content</p>";
    }
}