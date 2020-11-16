<?php

namespace App\src\controller;

use App\modele\Article;
use App\modele\Chapter;
use App\modele\Connection;
use App\utils\View;

class FrontController
{
    public function __construct()
    {
        $this->article = new Article();
        $this->chapter = new Chapter();
        $this->connection = new Connection();
    }

    public function home()
    {
        $articles = $this->article->getArticles();
        $myView = new View('viewHome');
        $myView->render(['articles' => $articles]);
    }

    public function getChapter($chapterID)
    {
        $chapter = $this->chapter->getChapter($chapterID);
        $comments = $this->chapter->getComment($chapterID);
        $myView = new View('viewChapter');
        $myView->render([
            'chapter' => $chapter,
            'comments' => $comments
        ]);
    }
    public function addComment($post, $chapterID)
    {
        if (!empty($post['author']) && !empty($post['comment'])) {
            $addComment = $this->chapter->addComment($chapterID, $post['author'],$post['comment'] );
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
