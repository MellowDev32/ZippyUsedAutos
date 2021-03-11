<?php include('../view/header.php') ?>

<?php if($classes) { ?>
<secion>
    <header>
        <h1>Class List</h1>
    </header>
    <br>
    <table>
    <?php foreach ($classes as $class) : ?>
        <tr>
            <td>
                <?= $class['className']; ?>
            </td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_class">
                    <input type="hidden" name="class_id" value="<?= $class['classID'] ?>">
                    <button class="remove-button">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</secion>
<?php } else { ?>
<p>No Classes exist yet.</p>
<?php } ?>


<section>
    <br>
    <br>
    <h2>Add Class</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_class">
        <div>
            <label>Name:</label>
            <input type="text" name="class_name" maxlength="50" placeholder="Name" autofocus required>
        </div>
        <br>
        <div>
            <button>Add</button>
        </div>
    </form>
    <br>
    <br>
    <p><a href=".">View/Add Vehicles</a></p>
</section>

<?php include('../view/footer.php') ?>