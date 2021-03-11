<?php include('../view/header.php'); ?>

<!-- $year, $model, $price, $type_id, $class_id, $make_id -->
<section>
    <h1>Add Vehicle</h1>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_vehicle">
        <table id="add-table">
            <tr>
                <td>
                    <label>Year:</label>
                </td>
                <td>
                    <input type="number" name="year" maxlength="4" placeholder="Year" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Model:</label>
                </td>
                <td>
                    <input type="text" name="model" maxlength="20" placeholder="Model" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Price:</label>
                </td>
                <td>
                    <input type="number" name="price" maxlength="10" placeholder="Price" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Type:</label>
                </td>
                <td>
                    <select name="type_id" required>
                        <option value="">Please select</option>
                        <?php foreach ($types as $type) : ?>
                        <option value="<?= $type['typeID']; ?>">
                            <?= $type['typeName']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Class:</label>
                </td>
                <td>
                    <select name="class_id" required>
                        <option value="">Please select</option>
                        <?php foreach ($classes as $class) : ?>
                        <option value="<?= $class['classID']; ?>">
                            <?= $class['className']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Make:</label>
                </td>
                <td>
                    <select name="make_id" required>
                        <option value="">Please select</option>
                        <?php foreach ($makes as $make) : ?>
                        <option value="<?= $make['makeID']; ?>">
                            <?= $make['makeName']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <div>
            <button>Add</button>
        </div>
    </form>
    
    <p><a href=".">View Vehicles</a></p>
</section>

<?php include('../view/footer.php'); ?>