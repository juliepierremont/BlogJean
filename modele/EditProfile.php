<?php

namespace App\modele;

use App\utils\Database;

class EditProfile
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProfile($id)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('SELECT id, username, email, DATE_FORMAT(date_inscription, \'%d/%m/%Y\') AS creation_date_fr  FROM members WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();
        return new Connection($data);
        $req->closeCursor();
    }

    public function updatePseudo($newPseudo, $id)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('UPDATE users SET username = ? WHERE id = ?');
        $req->execute(array($newPseudo, $id));
        $req->closeCursor();
    }

    public function updateEmail($newEmail, $id)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('UPDATE users SET email = ? WHERE id = ?');
        $req->execute(array($newEmail, $id));
        $req->closeCursor();
    }

    public function updatePassword($newPassword, $id)
    {
        $connection = $this->db->getConnection();
        $req = $connection->prepare('UPDATE users SET pass = ? WHERE id = ?');
        $req->execute(array($newPassword, $id));
        $req->closeCursor();
    }
}
