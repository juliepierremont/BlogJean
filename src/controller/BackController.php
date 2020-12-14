<?php

namespace App\src\controller;

use App\modele\Connection;
use App\utils\View;
use App\modele\EditProfile;
use App\modele\EditComment;
use App\modele\DeleteComment;
use App\modele\CreateChapter;
use App\modele\DeleteChapter;
use App\modele\UpdateChapter;

class BackController
{
    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getConnection($post)
    {
        if (!empty($post['login']) && !empty($post['password'])) {
            $connection = $this->connection->getConnection($post['login'], $post['password']);
            $this->checkPassword($connection, $post);
        }
    }

    public function checkPassword($checkPassword, $checkUser)
    {
        if ($checkPassword) {
            $_SESSION['id'] = 1;
            $_SESSION['username'] = $checkUser['login'];
            //$_SESSION['email'] = $checkUser['email'];
            // $_SESSION['name'] = $checkUser['name'];
            // $_SESSION['role'] = $checkUser['role'];
            header("Location: index.php?url=admin&action=profile");
        } else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
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

    public function updateChapter()
    {
        $myView = new View('viewUpdateChapter');
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
}
