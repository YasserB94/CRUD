<?php
abstract class DBStudentLoader extends DB_Connector
{
    public static function getAllStudents(): array
    {
        $allstudents = [];
        $pdo = self::connect();
        $data = $pdo->query("SELECT * FROM student_table");
        while ($row = $data->fetch(PDO::FETCH_NUM)) {
            $tmp = new Student($row[0], $row[1]);
            array_push($allstudents, $tmp);
        }
        return $allstudents;
    }
}
