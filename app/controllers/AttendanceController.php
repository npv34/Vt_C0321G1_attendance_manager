<?php


namespace App\Controller;


use App\Model\AttendanceModel;
use App\Model\StudentModel;

class AttendanceController
{
    protected AttendanceModel $attendanceModel;
    protected $studentModel;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
        $this->studentModel = new StudentModel();
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $groupId = $_REQUEST['group_id'];
            $studentsGroup = $this->studentModel->getStudentIntoGroup($groupId);
            include_once 'resource/views/attendances/add.php';
        } else {
            $day = $_POST['day_attendance'];
            $status = $_POST['status'];
            $userId = $_SESSION['userLogin']['id'];

            // them vao bang diem danh



        }
    }
}