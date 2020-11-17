<?php

namespace App\modele;

use App\utils\Database;

class Chapter
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

    // public function getComment($chapterID)
    // {
    //     $connection = $this->db->getConnection();
    //     $req = $connection->prepare('SELECT id, author, content FROM comment WHERE article_id = ? ORDER BY commentDate DESC');
    //     $req->execute(array($chapterID));
    //     while($data=$req->fetch()){
    //         $comments[]=$data;
    //     }
    //     return $comments;
    // }

    // public function addComment($id, $author, $content)
    // {
    //     $connection = $this->db->getConnection();
    //     $req = $connection->prepare('INSERT INTO comment(article_id, author, content, commentDate) VALUES (:article_id, :author, :content, NOW())');
    //     $req->execute(array(
    //         'article_id' => $id,
    //         'author' => $author,
    //         'content' => $content
    //     ));
    //     header('location:index.php?url=chapter&id=' . $id );
    // }



}
