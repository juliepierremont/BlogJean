<?php

namespace App\modele;

use App\utils\Database;

class UpdateChapter
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

    public function updateChapter($chapterID, $postTitle, $postContent, $postNumberChapter, $postDate)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('UPDATE article SET title = ? , content = ? , createdAt = ? , numberChapter = ? WHERE id = ' . $chapterID);
        $req->execute(array(
            'title' => $postTitle,
            'content' => $postContent,
            'numberChapter' => $postNumberChapter,
            'createdAt' => $postDate,

        ));
        header('location:index.php?url=chapter&id=' . $postTitle);
    }
}
