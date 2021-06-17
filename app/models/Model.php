<?php


namespace App\Model;


use App\Database\DBConnect;

class Model
{
    protected $conn;
    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }
}