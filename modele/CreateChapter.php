<?php

namespace App\modele;

use App\utils\Database;

class CreateChapter
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function createChapter($postTitle, $postContent, $postNumberChapter, $postDate)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('INSERT INTO article(title, content, createdAt, numberChapter) VALUES ( :title, :content, :numberChapter, NOW())');
        $req->execute(array(
            'title' => $postTitle,
            'content' => $postContent,
            'numberChapter' => $postNumberChapter,
            'createdAt' => $postDate,

        ));
        header('location:index.php?url=chapter&id=' . $postTitle);
    }
}
