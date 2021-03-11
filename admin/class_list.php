<?php include('../view/header.php') ?>

<section class="container">
<?php if($classes) { ?>
    <h1 class="list-title">Class List</h1>
    <section class="mtc-table">
        <table>
        <?php foreach ($classes as $class) : ?>
            <tr>
                <td>
                    <?= $class['className']; ?>
                </td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_class">
                        <input type="hidden" name="type_id" value="<?= $class['classID'] ?>">
                        <button class="remove-button">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php } else { ?>
    <p>No Classes exist yet.</p>
    <?php } ?>
    </section>

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
    <section class="transfer-pages">
        <p><a href=".">View/Add Vehicles</a></p>
    </section>
</section>


<?php include('../view/footer.php') ?>