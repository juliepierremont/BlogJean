<?php

namespace App\utils;

use App\src\controller\FrontController;

class Router
{
    private $frontcontoller;
    public function __construct()
    {
        $this->frontcontroller = new FrontController();
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
           /*
            if ($_GET['connection'] == 'connection') {
            }

            if ($_GET['register'] == 'register') {
            }

            if ($_GET['administration'] == 'administration') {
            }

            if ($_GET['disconnection'] == 'disconnection') {
            }

            if ($_GET['delectCount'] == 'deleteCount') {
            } */
        } else {
            $this->frontcontroller->home();
        }
    }
}
