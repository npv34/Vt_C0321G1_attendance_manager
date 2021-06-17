<?php


namespace App\Model;


class GroupModel extends Model
{
    function getAll(): array
    {
        $sql = 'SELECT zooms.id, zooms.name, COUNT(students.id) as `total_student` FROM `zooms`
                JOIN students ON zooms.id = students.group_id GROUP BY students.group_id'
                ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}