<?php include('../view/header.php') ?>

<?php if($makes) { ?>
<secion>
    <header>
        <h1>Make List</h1>
    </header>
    <br>
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
</secion>
<?php } else { ?>
<p>No Makes exist yet.</p>
<?php } ?>


<section>
    <br>
    <br>
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
    <br>
    <br>
    <p><a href=".">View/Add Vehicles</a></p>
</section>

<?php include('../view/footer.php') ?>