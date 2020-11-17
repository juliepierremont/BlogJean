<?php

namespace App\modele;

class CommentModel
{
    private $id;
    private $content;
    private $author;
    private $commentDate;

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
    public function getContent()
    {
        return $this->content;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getCommentDate()
    {
        return $this->commentDate;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    }
}
