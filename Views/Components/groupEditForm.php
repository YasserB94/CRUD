<form method="POST" style="display:flex;justify-content:center">
    <label for="groupname">New Name for:</label>
    <input type="text" name="newGroupName" value="<?=$group->getName()?>"></input>
    <button type="submit" name="idOfGroupToUpdate" value="<?=$group->getID()?>">Update Groupname</button>
</form>