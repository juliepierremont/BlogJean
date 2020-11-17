<?php

namespace App\modele;

use App\utils\Database;

class Comment{

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getComment($chapterID)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('SELECT id, author, content FROM comment WHERE article_id = ? ORDER BY commentDate DESC');
        $req->execute(array($chapterID));
        while($data=$req->fetch()){
            $comments[]=$data;
        }
        return $comments;
    }

    public function addComment($id, $author, $content)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('INSERT INTO comment(article_id, author, content, commentDate) VALUES (:article_id, :author, :content, NOW())');
        $req->execute(array(
            'article_id' => $id,
            'author' => $author,
            'content' => $content
        ));
        header('location:index.php?url=chapter&id=' . $id );
    }


}