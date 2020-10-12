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

    public function getChapters($chapter){
        $chapter = $this->chapter->getChapter();
        $myView = new View('viewChapter');
        $myView->render(['chapter' => $chapter]);
    }

}
