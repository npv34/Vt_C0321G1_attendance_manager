<?php


namespace App\Controller;


use App\Model\GroupModel;

class GroupController extends Controller
{
    protected $groupModel;

    public function __construct()
    {
        $this->groupModel = new GroupModel();
    }

    function getAll() {
        $groups =  $this->groupModel->getAll();
        include_once "resource/views/groups/list.php";
    }
}