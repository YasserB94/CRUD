<div style="display: flex;
    align-items: center;
    justify-content: space-between;
    width: 50%;
    margin: .25rem auto;
    border-style: solid;
    border-radius: .125rem;
    padding: .25rem;">
    <span>Group ID: <?= $group->getID(); ?> </span>
    <span>Group Name: <?= $group->getName(); ?></span>
    <form method="POST"><button type="submit" name="editGroup" value="<?= $group->getID(); ?>">Edit this group</button>
    <button type="submit" name="deleteGroup" value="<?= $group->getID(); ?>">Delete</button></form>
</div>