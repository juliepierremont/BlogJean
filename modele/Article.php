<?php

namespace App\modele;

use App\utils\Database;

class Article
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getArticles()
    {
        $connection = $this->db->getConnection();
        $query = $connection->query('SELECT id, title, content, author, createdAt, numberChapter FROM article ORDER BY id DESC');
        $result = $query->fetch();
        return $result;
    }
}
