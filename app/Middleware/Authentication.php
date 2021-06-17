<?php
namespace App\Middleware;

use App\Database\DBConnect;

class Authentication
{
    protected $conn;
    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    function checkLogin()
    {
        if (!$_SESSION['userLogin']) {
            header('location: resource/views/pages/login.php');
        }
    }
}