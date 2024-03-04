<?php

class SportNews extends Post
{

    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();

        return "Sport News:<i>$title</i><p>$content</p>";
    }
}