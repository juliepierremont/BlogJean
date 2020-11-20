<?php

namespace App\modele;

use App\utils\Database;

class Connection
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getConnection($username, $password)
    {
        var_dump($username, $password);
        var_dump(password_hash($password, PASSWORD_BCRYPT));
        $connection = $this->db->getConnection();
        // $req = $connection->prepare('INSERT INTO users(username, email, type, password) VALUES(:username, :email, :type, :password) ');
        // $req->execute([
        //     ":username" => $username,
        //     ":email" => $username,
        //     ":type" => "admin",
        //     ":password" => password_hash($password, PASSWORD_BCRYPT)
        // ]);



        $req = $connection->prepare('SELECT * FROM users WHERE username = ?');
        $req->execute([
            $username
        ]);
        $checkUser = $req->fetch();
        $checkPassword = password_verify($password, $checkUser['password']);
        var_dump($checkUser['password']);
        var_dump($checkUser);
        return $checkPassword;
    }

    public function checkPassword($checkPassword, $checkUser)
    {
        if ($checkPassword) {
            session_start();
            $_SESSION['id'] = $checkUser['id'];
            $_SESSION['username'] = $checkUser['username'];
            // $_SESSION['email'] = $checkUser['email'];
            // $_SESSION['name'] = $checkUser['name'];
            // $_SESSION['role'] = $checkUser['role'];

            header("Location: index.php?url=profile");
        } else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }


    // public function createMember(){
    //     var_dump($username, $password);
    //     var_dump(password_hash($password, PASSWORD_DEFAULT));
    //     $connection = $this->db->getConnection();
    //     $req = $connection->prepare('INSERT INTO users(username, email, type, password) VALUES(:username, :email, :type, :password) ');
    //     $req->execute([
    //         ":username" => $username,
    //         ":email" => $username,
    //         ":type" => "admin",
    //         ":password" => password_hash($password, PASSWORD_BCRYPT)
    //     ]);
    // }
}
