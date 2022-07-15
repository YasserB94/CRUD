<!--Here we have a little form that allos the user to enter a groupname
And set it in our $_POST array, so that we can get user's input in our controller
Since the ID is automaticly incremented in the database, we'll (for now) only ask the user for a name-->
<form method="POST" style="display:flex;justify-content:center">
    <label for="groupname">Groupname:</label>
    <input type="text" name="addGroupName"></input>
    <button type="submit">Add Group!</button>
</form>