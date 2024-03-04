<?php

class News extends Post
{
    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();

        return "<p><i>$title:</i>$content</p>";
    }
}