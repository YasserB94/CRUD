<?php

class GroupController
{
    public function __construct(){
        //I used the $_POST array to tell the server if the user wants to do an action, so here we'll see if the user picked one of those options.
        $this->checkForOptions();
    }
    private function checkForOptions(){
        //Let's see if the user pressed the add button
        if(isset($_POST['addGroupName'])){
            //Let's get the value thats in the groupname
            $newGroupname = $_POST['addGroupName'];
            //Let's tell our DB connection class to add a new group, and give it our new group name.
            DBGroupLoader::addGroup($newGroupname);
        }
        //Did the user give us a new name for an existing group ? 
        if(isset($_POST['newGroupName'])){
            //Let's get that name 
            $newName = $_POST['newGroupName'];
            //Lets now get the ID of the group they want to update (The confirming button will set this value)
            $idOfGroupToUpdate = $_POST['idOfGroupToUpdate'];
            //Now lets again tell our database connection to edit the groupname. 
            DBGroupLoader::editGroupNameByID($idOfGroupToUpdate,$newName);
        }
        //Did the user tell us they'd want to delete a group ? 
        if(isset($_POST['deleteGroup'])){
            //Let's get the value in our $_POST array
            $idOfGroupToDelete = $_POST['deleteGroup'];
            //Let's tell our database to delete that group
            DBGroupLoader::deleteGroupByID($idOfGroupToDelete);
        }
    }
    public function render()
    {
        //I always want to display all the groups in the database
        $this->renderAllGroups();
        //If the user hasn't clicked the addgroup buttom I want to show a button to add a group
        if (!isset($_POST['addGroup'])) {
            $this->renderAddButton();
        } else {
            //If they did click the addgroup button, let's instead render out a form that allows them to add a group
            $this->renderAddForm();
        }
        //Did the user click the edit button ? 
        if(isset($_POST['editGroup'])){
            //Lets give them a little box where they can edit the group's name
            $this->renderEditForm();
        }
    }
    private function renderAllGroups()
    {
        //Get all the groups from the database
        $groups = DBGroupLoader::getAllGroups();
        if(!$groups){
            //If there are no groups, let's tell our user
            echo 'There are currently no groups in our database, please add them with the button';
        }
        //Now let's loop over all the groups and show them in a view
        foreach ($groups as $key => $group) {
            require __DIR__ . '../../Views/groupView.php';
        }
    }
    private function renderAddButton()
    {
        //If this funciton is called al ittle button is rendered so the user can add groups
        require __DIR__ . '../../Views/Components/groupAddButton.php';
    }
    private function renderAddForm()
    {
        //When called this view will show a little form for the user to add a new group
        require __DIR__ . '../../Views/Components/groupAddForm.php';
    }
    private function renderEditForm(){
        //The user wants to edit a group. Now let's make sure they are able to edit the group they chose to edit
        //So we ask our database to give us the group, using the value stored in $_POST when the user presses the edit button
        $group = DBGroupLoader::getGroupByID($_POST['editGroup']);
        //Now let's show the form
        require __DIR__ . '../../Views/Components/groupEditForm.php';
    }
}
