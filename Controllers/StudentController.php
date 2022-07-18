<?php

class StudentController
{
    public function __construct(){
        $this->checkForOptions();
    }
    private function checkForOptions(){
        if(isset($_POST['addStudentName'])){
            //Let's get that name
            $newStudentname = htmlspecialchars($_POST['addStudentName']);
            DBStudentLoader::addStudent($newStudentname);
        }
        if(isset($_POST['newStudentName'])){

            $newName = $_POST['newStudentName'];
            $idOfStudentToUpdate = htmlspecialchars($_POST['idOfStudentToUpdate']);
            DBStudentLoader::editStudentNameByID($idOfStudentToUpdate,$newName);
        }
        if(isset($_POST['deleteStudent'])){
            $idOfStudentToUpdate = $_POST['deleteStudent'];
            DBStudentLoader::deleteStudentByID($idOfStudentToUpdate);
        }
    }
    public function render()
    {
        $this->renderAllStudents();
        if (!isset($_POST['addStudent'])) {
            $this->renderAddButton();
        } else {
            $this->renderAddForm();
        }
        if(isset($_POST['editStudent'])){
            $this->renderEditForm();
        }
    }
    private function renderAllStudents()
    {
        $students = DBStudentLoader::getAllStudents();
        foreach ($students as $key => $student) {
            require __DIR__ . '../../Views/studentView.php';
        }
    }
    private function renderAddButton()
    {
        require __DIR__ . '../../Views/Components/studentAddButton.php';
    }
    private function renderAddForm()
    {
        require __DIR__ . '../../Views/Components/studentAddForm.php';
    }
    private function renderEditForm(){
        $student = DBStudentLoader::getStudentByID($_POST['editStudent']);
        require __DIR__ . '../../Views/Components/studentEditForm.php';
    }
}
