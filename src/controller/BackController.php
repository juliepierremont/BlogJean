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
        if (!empty($post['login']) && !empty($post['password'])){
            $connection = $this->connection->getConnection($post['login'],$post['password']);
            var_dump($connection);
        }
    }
 
}
