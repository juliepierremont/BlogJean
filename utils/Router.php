<?php

namespace App\utils;

class Router
{
    public function run()
    {
        if (isset($_GET['url'])) {
            var_dump($_GET['url']);
            if (isset($_GET['id'])) {
                var_dump($_GET['id']);
            }
        }
    }
}
