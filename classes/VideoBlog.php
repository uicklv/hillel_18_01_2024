<?php

class VideoBlog extends Post
{

    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();
        return "Video Blog:<h3>$title</h3><p>$content</p>";
    }
}