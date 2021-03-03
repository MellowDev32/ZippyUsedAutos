<?php include('../view/header.php'); ?>

<section class="vehicle-table">
    
        <table>
            <tr>
                <th>Year</th>
                <th>Price</th>
                <th>Model</th>
                <th>Make</th>
                <th>Type</th>
                <th>Class</th>
            </tr>
            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td>
                    <?= $vehicle['year'] ?>
                </td>
                <td>
                    <?= $vehicle['price'] ?>
                </td>
                <td>
                    <?= $vehicle['model'] ?>
                </td>
                <td>
                    <?= get_make_name($vehicle['makeID']) ?>
                </td>
                <td>
                    <?= get_type_name($vehicle['typeID']) ?>
                </td>
                <td>
                    <?= get_class_name($vehicle['classID']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <p>No vehicles exist in list</p>
    
</section>

<?php include('../view/footer.php'); ?>