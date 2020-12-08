<?php

namespace App\modele;

use App\utils\Database;

class EditComment
{
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

    public function updateComment($newComment, $id)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('UPDATE comment SET content = ? WHERE id = ?');
        $req->execute(array($newComment, $id));
        $req->closeCursor();
    }
}
