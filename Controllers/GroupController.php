<?php

class GroupController
{
    public function __construct(){
        $this->checkForOptions();
    }
    private function checkForOptions(){
        if(isset($_POST['addGroupName'])){
            $newGroupname = $_POST['addGroupName'];
            DBGroupLoader::addGroup($newGroupname);
        }
        if(isset($_POST['editGroup'])){
            echo $_POST['editGroup'];
        }
        if(isset($_POST['deleteGroup'])){
            $idOfGroupToDelete = $_POST['deleteGroup'];
            DBGroupLoader::deleteGroupByID($idOfGroupToDelete);
        }
    }
    public function render()
    {
        $this->renderAllGroups();
        if (!isset($_POST['addGroup'])) {
            $this->renderAddButton();
        } else {
            $this->renderAddForm();
        }
    }
    private function renderAllGroups()
    {
        $groups = DBGroupLoader::getAllGroups();
        foreach ($groups as $key => $group) {
            require __DIR__ . '../../Views/groupView.php';
        }
    }
    private function renderAddButton()
    {
        require __DIR__ . '../../Views/Components/groupAddButton.php';
    }
    private function renderAddForm()
    {
        require __DIR__ . '../../Views/Components/groupAddForm.php';
    }
}
