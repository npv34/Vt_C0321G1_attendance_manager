<?php


namespace App\Model;


class StudentModel extends Model
{
    function getStudentIntoGroup($groupId) {
        $sql = 'SELECT id, name, email, phone FROM students 
                WHERE  group_id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $groupId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}