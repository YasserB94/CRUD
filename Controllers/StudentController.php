<?php

class StudentController
{
    public function render()
    {
        $students = DBStudentLoader::getAllStudents();
//        var_dump($students);
        foreach ($students as $key => $student) {
            require __DIR__ . '../../Views/studentView.php';
        }
    }
}