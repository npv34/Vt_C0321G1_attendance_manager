<?php


namespace App\Model;


class UserModel extends Model
{
    function getByEmailPassword($email, $password)
    {
        $sql = 'SELECT * FROM `users` WHERE email = ? AND password = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}