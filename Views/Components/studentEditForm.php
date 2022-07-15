<form method="POST" style="display:flex;justify-content:center">
    <label for="studentname">New Name for:</label>
    <input type="text" name="newStudentName" value="<?=$student->getName()?>"></input>
    <button type="submit" name="idOfStudentToUpdate" value="<?=$student->getID()?>">Update Studentname</button>
</form>