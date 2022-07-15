<?php

class TeacherController
{
    public function render()
    {
        $teachers = DBTeacherLoader::getAllTeachers();

        foreach ($teachers as $value => $teacher) {
            require __DIR__ . '../../Views/teacherView.php';
        }
       
  
      

}

}



