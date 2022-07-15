<!--This form will allow the user to change a form's name-->
<form method="POST" style="display:flex;justify-content:center">
    <label for="groupname">New Name for:</label>
    <!--So that the user is sure he/she is editing the -->
    <input type="text" name="newGroupName" value="<?=$group->getName()?>"></input>
    <button type="submit" name="idOfGroupToUpdate" value="<?=$group->getID()?>">Update Groupname</button>
</form>