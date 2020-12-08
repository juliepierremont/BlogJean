<?php

namespace App\modele;

use App\utils\Database;

class DeleteChapter
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getChapters()
    {
        $connection = $this->db->getConnection();
        $query = $connection->query('SELECT id, title, content, author, createdAt, numberChapter FROM article ORDER BY id DESC');
        while ( $result = $query->fetch()){
            $chapters[] = new ChapterModel($result); 
        }
        return $chapters;
    }

    public function getChapter($chapterID)
    {
        $connection = $this->db->getConnection();
        $query = $connection->query('SELECT id, title, content, author, createdAt, numberChapter FROM article WHERE id = ' . $chapterID);
        $result = $query->fetch();
        return $result;
    }

    public function deleteChapter($chapterID)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('DELETE FRROM article WHERE id = ' .$chapterID);
        $req->execute(array($chapterID));
    }
}
