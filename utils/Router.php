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

            var_dump($_GET['url']);
            //$get=$_GET['get'];

            if ($_GET['chapter'] == 'chapter') {
                $this->frontcontoller->getChapter($_GET['chapter']);
            }

            if ($_GET['addComment'] == 'addComment') {
                $this->frontcontoller->addComment();
            }

            if ($_GET['connection'] == 'connection') {
            }

            if ($_GET['register'] == 'register') {
            }

            if ($_GET['administration'] == 'administration') {
            }

            if ($_GET['disconnection'] == 'disconnection') {
            }

            if ($_GET['delectCount'] == 'deleteCount') {
            }
        } else {
            $this->frontcontroller->home();
        }
    }
}
