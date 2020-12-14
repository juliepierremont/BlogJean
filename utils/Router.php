<?php

namespace App\utils;

use App\src\controller\BackController;
use App\src\controller\FrontController;

class Router
{
    private $frontcontroller;
    public function __construct()
    {
        $this->frontcontroller = new FrontController();
        $this->backcontroller = new BackController();
    }

    public function run()
    {
        if (isset($_GET['url'])) {
            //$get=$_GET['get'];

            if ($_GET['url'] == 'home') {
                $this->frontcontroller->home();
            }
            if ($_GET['url'] == 'chapter' & isset($_GET['id'])) {
                $this->frontcontroller->getChapter($_GET['id']);
            }

            if ($_GET['url'] == 'addComment') {
                $this->frontcontroller->addComment($_POST, $_GET['id']);
            }

            if ($_GET['url'] == 'connexion') {
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $this->frontcontroller->getConnection();
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->backcontroller->getConnection($_POST);
                }
            }
            if ($_GET['url'] == 'admin') {
                if ($_GET['action'] == 'editComment') {
                    $this->backcontroller->editComment();
                }
                if ($_GET['action'] == 'deleteComment') {
                    $this->backcontroller->deleteComment();
                }

                if ($_GET['action'] == 'createChapter') {
                    $this->backcontroller->createChapter();
                }

                if ($_GET['action'] == 'updateChapter') {
                    $this->backcontroller->updateChapter();
                }

                if ($_GET['action'] == 'deleteChapter') {
                    $this->backcontroller->deleteChapter();
                }

                if ($_GET['action'] == 'profile') {
                    $this->backcontroller->getProfile();
                }

                if ($_GET['action'] == 'editProfile') {
                    $this->backcontroller->editProfile();
                }

                
            }
        } else {
            $this->frontcontroller->home();
        }
    }
}
