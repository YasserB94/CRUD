<div style="display: flex;
    align-items: center;
    justify-content: space-between;
    width: 50%;
    margin: .25rem auto;
    border-style: solid;
    border-radius: .125rem;
    padding: .25rem;">
    <span>Student ID: <?= $student->getID(); ?> </span>
    <span>Student Name: <?= $student->getName(); ?></span>
    <form method="POST"><button type="submit" name="editStudent" value="<?= $student->getID(); ?>">Edit this student</button>
        <button type="submit" name="deleteStudent" value="<?= $student->getID(); ?>">Delete</button></form>
</div>
