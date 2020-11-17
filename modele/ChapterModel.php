<?php

namespace App\modele;

class ChapterModel
{
    private $id;
    private $title;
    private $content;
    private $author;
    private $createdAt;
    private $numberChapter;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function getNumberChapter()
    {
        return $this->numberChapter;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    public function setNumberChapter($numberChapter)
    {
        $this->numberChapter = $numberChapter;
    }
}
