<?php
namespace App\Database;

use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=attendance_manager';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (PDOException $PDOException) {
            echo 'connect database error';
            die();
        }
    }
}