<?php

namespace App\src\controller;

use App\modele\Article;
use App\modele\Chapter;
use App\utils\View;

class FrontController
{
    public function __construct()
    {
        $this->article = new Article();
        $this->chapter = new Chapter();
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
        var_dump($post);
    }
}
