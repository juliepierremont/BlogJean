<?php

namespace App\src\controller;

use App\modele\Comment;
use App\modele\Chapter;
use App\modele\Connection;
use App\modele\EditProfile;
use App\modele\EditComment;
use App\modele\DeleteComment;
use App\modele\CreateChapter;
use App\modele\DeleteChapter;
use App\utils\View;

class FrontController
{
    public function __construct()
    {
        $this->chapter = new Chapter();
        $this->connection = new Connection();
        $this->comment = new Comment();
        $this->editProfile = new EditProfile();
        $this->editComment = new EditComment();
        $this->deleteComment = new DeleteComment();
        $this->createChapter = new CreateChapter();
        $this->deleteChapter = new DeleteChapter();
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
            $addComment = $this->comment->addComment($chapterID, $post['author'], $post['comment']);
        }
    }

    public function getConnection()
    {
        $myView = new View('viewConnection');
        $myView->render();
    }

    public function getProfile()
    {
        $myView = new View('viewProfile');
        $myView->render();
    }

    public function editComment()
    {
        $myView = new View('viewEditComment');
        $myView->render();
    }

    public function deleteComment()
    {
        $myView = new View('viewDeleteComment');
        $myView->render();
    }

    public function createChapter()
    {
        $myView = new View('viewCreateChapter');
        $myView->render();
    }
    public function deleteChapter()
    {
        $myView = new View('viewDeleteChapter');
        $myView->render();
    }


    public function editProfile()
    {
        $myView = new View('viewEditProfile');
        $myView->render();
    }

    public function editChapter()
    {
        $myView = new View('viewEditChapter');
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
