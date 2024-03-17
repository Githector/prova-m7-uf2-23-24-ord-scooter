<div class="col-10 mx-auto mt-5">
<table class="table">
    <h2>Rent's list</h2>
    <?php
    if (isset($params['rents'])) {
    ?>

        <thead>
            <tr>
                <th scope="col">Brain</th>
                <th scope="col">Model</th>
                <th scope="col">User</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Price</th>

            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($params['rents'] as $rent) {

            ?>

                <tr>
                    <td class="align-middle"><?php echo $rent['brain'] ?></td>
                    <td class="align-middle"><?php echo $rent['model'] ?></td>
                    <td class="align-middle"><?php echo $rent['username'] ?></td>
                    <td class="align-middle"><?php echo $rent['start'] ?></td>
                    <?php
                        if(!isset($rent['end'])){
                            echo "<td class='align-middle text-danger'>Not finished</td>";
                        }else{
                            echo "<td class='align-middle'>".$rent['end']."</td>";
                        }

                        if(!isset($rent['price'])){
                            echo "<td class='align-middle text-danger'>Not finished</td>";
                        }else{
                            echo "<td class='align-middle'>" . $rent['price'] . " €</td>";
                        }
                    ?>
                </tr>

        <?php
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>No scooters found</div>";
        }

        ?>
        </tbody>
</table>
</div>