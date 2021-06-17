<?php


namespace App\Controller;


use App\Model\UserModel;

class AuthController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function login($email, $password)
    {
        $data = $this->userModel->getByEmailPassword($email, $password);
        if ($data) {
            $_SESSION['userLogin'] = $data;
            $_SESSION['login-error'] = null;
            header('location:../../../index.php');
        }else {
            $_SESSION['login-error'] = 'Tai khoan khong chinh xac';
        }
    }
}