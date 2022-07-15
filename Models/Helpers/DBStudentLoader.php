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
    public static function getStudentByID(int $id):Student{
        $pdo = self::connect();
        $sql = 'SELECT * FROM student_table WHERE id='.$id;
        $data = $pdo->query($sql);
        while($row=$data->fetch(PDO::FETCH_NUM)){
            $student = new Student($row[0],$row[1]);
            return $student;
        }

    }
    public static function addStudent(string $studentname)
    {
        $pdo = self::connect();
        $tableName = 'student_table';
        $sql = 'INSERT INTO student_table(name) VALUES(:name)';
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ':name' => $studentname
        ]);
    }

    public static function deleteStudentByID(int $id){
        $pdo = self::connect();
        $tableName = 'student_table';
        $sql = 'DELETE FROM student_table WHERE id =' . $id;
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }
    public static function editStudentNameByID(int $id,string $newName){
        $pdo = self::connect();
        $tableName = 'student_table';
        $sql = 'UPDATE student_table SET name=? WHERE id=?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$newName,$id]);
    }
}
