<!--This is a view to show a group
To have a simple way of showing every group without interfering with other HTML elements I put this in a div
I also added the styling inline to not clutter our style.css too much, and to make it clear to other students where this styling is coming from
-->
<div style="display: flex;
    align-items: center;
    justify-content: space-between;
    width: 50%;
    margin: .25rem auto;
    border-style: solid;
    border-radius: .125rem;
    padding: .25rem;">
    <!--I want to display all the group's info, So i'll get 2 inline span elements where PHP echos the information of a group-->
    <span>Group ID: <?= $group->getID(); ?> </span>
    <span>Group Name: <?= $group->getName(); ?></span>
    <!--I would like edit and delete buttons next to every group, since I am using $_POST to handle these requests, I'm using 2 buttons here.
The value of these buttons is the current group's ID. So that every button will be able to communicate the corresponding's group's ID towards the server
SO let's give them descriptive names of the action we'd want to do. and a value that contains the group's ID that will help us complete the action on the intended group-->
    <form method="POST"><button type="submit" name="editGroup" value="<?= $group->getID(); ?>">Edit this group</button>
    <button type="submit" name="deleteGroup" value="<?= $group->getID(); ?>">Delete</button></form>
</div>