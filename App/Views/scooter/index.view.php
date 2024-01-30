<h1 class="text-center mt-3 text-danger">Hello <?= $params['user'] ?>!!!</h1>

<?php
if ($params['user'] == 'admin') {
?>

    <form action="/scooter/store" method="post" class="col-11 col-md-9 col-lg-6 col-xl-5 p-4 mt-4 mx-auto border">

        <h2 class="mt-2">New Scooter</h2>

        <?php

        if (isset($params['flash']['ok'])) {
            echo "<div class='alert alert-success' role='alert'>" . $params['flash']['ok'] . "</div>";
            unset($params['flash']['ok']);
        }
        if (isset($params['flash']['ko'])) {
            echo "<div class='alert alert-danger' role='alert'>" . $params['flash']['ko'] . "</div>";
            unset($params['flash']['ko']);
        }
        ?>
        <div class="mb-3">
            <label for="brain" class="form-label">Brain</label>
            <input type="text" class="form-control" name="brain" id="brain" aria-describedby="helpId" placeholder="" value="<?php echo $params['post']['brain'] ?? null ?>">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" name="model" id="model" aria-describedby="helpId" placeholder="" value="<?php echo $params['post']['model'] ?? null ?>">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" class="form-control" name="img" id="img" aria-describedby="helpId" placeholder="" value="<?php echo $params['post']['img'] ?? null ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price per minute</label>
            <input type="number" class="form-control" name="price" id="birthdate" aria-describedby="helpId" placeholder="" value="<?php echo $params['post']['price'] ?? null ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Save</button>
        <button type="reset" class="btn btn-danger mb-2">Reset</button>


    </form>

<?php
}
?>

<div class="list_scooters col-11 col-lg-10 mx-auto mt-4">
    <table class="table">
        <h2>Scooter's list</h2>
        <?php
        if (isset($params['scooters'])) {
        ?>

            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Brain</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price / Minute</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($params['scooters'] as $scooter) {

                ?>

                    <tr>
                        <th scope="row">
                            <img src="<?= $_SERVER['DOCUMENT_ROOT'] ?>/../../../Public/Assets/scooters/<?= $scooter['img'] ?>" alt="" style="width: 100px; height: 100px;">
                        </th>
                        <td class="align-middle"><?php echo $scooter['brain'] ?></td>
                        <td class="align-middle"><?php echo $scooter['model'] ?></td>
                        <td class="align-middle"><?php echo $scooter['price'] ?> €/min</td>
                        <td class="align-middle">

                            <?php
                            if ($params['user'] == 'admin') {
                            ?>
                                <a class="btn btn-danger" href="/scooter/destroy/?id=<?= $scooter['id'] ?>">Remove</a>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn-primary" href="/rent/create/?id_scooter=<?= $scooter['id'] ?>">Rent</a>
                            <?php
                            }
                            ?>
                        </td>
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