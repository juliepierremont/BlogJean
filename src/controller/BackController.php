<?php

namespace App\src\controller;

use App\modele\Connection;
use App\utils\View;

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
            $this->checkPassword($connection,$post);
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


}
