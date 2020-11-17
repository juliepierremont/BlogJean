<?php

namespace App\src\controller;

use App\modele\Comment;
use App\modele\Chapter;
use App\modele\Connection;
use App\utils\View;

class FrontController
{
    public function __construct()
    {
        $this->chapter = new Chapter();
        $this->connection = new Connection();
        $this->comment = new Comment();
    }

    public function home()
    {
        $chapters = $this->chapter->getChapters();
        $myView = new View('viewHome');
        $myView->render(['chapters' => $chapters]);
    }

    public function getChapter($chapterID)
    {
        $chapter = $this->chapter->getChapter($chapterID);
        $comments = $this->comment->getComment($chapterID);
        $myView = new View('viewChapter');
        $myView->render([
            'chapter' => $chapter,
            'comments' => $comments
        ]);
    }
    public function addComment($post, $chapterID)
    {
        if (!empty($post['author']) && !empty($post['comment'])) {
            $addComment = $this->comment->addComment($chapterID, $post['author'],$post['comment'] );
        }
    }

    public function getConnection()
    {
        $myView = new View('viewConnection');
        $myView->render();
    }

/*     public function getConnection()
    {
        if (!empty($post['login']) && !empty($post['password'])){
            $connection = $this->connection->getConnection();
            var_dump($connection);
        }
    }
 */
}
