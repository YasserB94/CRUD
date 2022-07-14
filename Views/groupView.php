<div class="groupView">
    <span>Group ID: <?= $group->getID(); ?> </span>
    <span>Group Name: <?= $group->getName(); ?></span>
    <form method="POST"><button type="submit" name="editGroup" value="<?= $group->getID(); ?>">Edit this group</button></form>
</div>