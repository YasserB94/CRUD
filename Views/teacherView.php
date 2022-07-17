<div>
    <span>Teacher ID: <?= $teacher->getID(); ?> </span> <span>Teacher Name: <?= $teacher->getName(); ?></span>
    <form method="POST"><button type="submit" name="editTeacher" value="<?= $teacher->getID(); ?>">Edit this teacher</button>
    <button type="submit" name="deleteTeacher" value="<?= $teacher->getID(); ?>">Delete</button></form>
</div>


