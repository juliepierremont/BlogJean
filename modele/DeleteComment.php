<?php

namespace App\modele;

use App\utils\Database;

class DeleteComment
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
        while ($data = $req->fetch()) {
            $comments[] = $data;
        }
        return $comments;
    }

    public function deleteComment($commentID)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('DELETE FROM comment(comment_id, author, content, commentDate, article_id) WHERE id = ' . $commentID);
        $req->execute(array(
            'comment_id' => $id,
            'author' => $author,
            'content' => $content
        ));
        header('location:index.php?url=chapter&id=' . $id);
    }
}
