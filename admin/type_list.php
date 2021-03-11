<?php include('../view/header.php') ?>

<section class="container">
<?php if($types) { ?>
    <h1 class="list-title">Type List</h1>
    <section class="mtc-table">
        <table>
        <?php foreach ($types as $type) : ?>
            <tr>
                <td>
                    <?= $type['typeName']; ?>
                </td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_type">
                        <input type="hidden" name="type_id" value="<?= $type['typeID'] ?>">
                        <button class="remove-button">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php } else { ?>
    <p>No Types exist yet.</p>
    <?php } ?>
    </section>

    <h2>Add Type</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_type">
        <div>
            <label>Name:</label>
            <input type="text" name="type_name" maxlength="50" placeholder="Name" autofocus required>
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