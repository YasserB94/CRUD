<?php

class TeacherController
{

    public function render()
    {
        // Get all the teachers from the database
        $teachers = DBTeacherLoader::getAllTeachers();

        // Loop over the all teachers and show them in the view
        foreach ($teachers as $value => $teacher) {
            require __DIR__ . '../../Views/teacherView.php';
        }
       
  
      

}



}



