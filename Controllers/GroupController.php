<?php

class GroupController
{
    public function __construct(){
        //I used the $_POST array to tell the server if the user wants to do an action, so here we'll see if the user picked one of those options.
        $this->checkForOptions();
    }
    private function checkForOptions(){
        if(isset($_POST['addGroupName'])){
            $newGroupname = $_POST['addGroupName'];
            DBGroupLoader::addGroup($newGroupname);
        }
        if(isset($_POST['newGroupName'])){
            $newName = $_POST['newGroupName'];
            $idOfGroupToUpdate = $_POST['idOfGroupToUpdate'];
            DBGroupLoader::editGroupNameByID($idOfGroupToUpdate,$newName);
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
        if(isset($_POST['editGroup'])){
            $this->renderEditForm();
        }
    }
    private function renderAllGroups()
    {
        $groups = DBGroupLoader::getAllGroups();
        if(!$groups){
            echo 'There are currently no groups in our database, please add them with the button';
        }
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
    private function renderEditForm(){
        $group = DBGroupLoader::getGroupByID($_POST['editGroup']);
        require __DIR__ . '../../Views/Components/groupEditForm.php';
    }
}
