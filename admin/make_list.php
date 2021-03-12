<?php include('../admin/header.php') ?>
<section class="container">
<?php if($makes) { ?>
    <h1 class="list-title">Make List</h1>
    <section class="mtc-table">
        <table>
        <?php foreach ($makes as $make) : ?>
            <tr>
                <td>
                    <?= $make['makeName']; ?>
                </td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_make">
                        <input type="hidden" name="make_id" value="<?= $make['makeID'] ?>">
                        <button class="remove-button">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php } else { ?>
    <p>No Makes exist yet.</p>
    <?php } ?>
    </section>

    <h2>Add Make</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_make">
        <div>
            <label>Name:</label>
            <input type="text" name="make_name" maxlength="50" placeholder="Name" autofocus required>
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
<?php include('../admin/footer.php') ?>