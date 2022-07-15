<?php
abstract class DBTeacherLoader extends DB_Connector
{
    public static function getAllTeachers(): array
    {
        $allteachers = [];
        $pdo = self::connect();
        $data = $pdo->query("SELECT * FROM teacher_table");
        while ($row = $data->fetch(PDO::FETCH_NUM)) {
          $teacher = new Teacher($row[0], $row[1]);
         array_push($allteachers, $teacher);
        }

        return $allteachers;
    }
}
