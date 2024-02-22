<div class="card p-4 col-10 col-xs-9 col-sm-7 col-lg-5 col-xl-4 col-xxl-3 mx-auto mt-5">
    <h2 class="text-center mb-4">Welcome to Crivi Scooter Rent!!!</h2>
    <form action="/user/login" method="post">
        <div class="form-group mb-3">
            <label for="username" class="font-weight-bold mb-2 fs-4">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group mb-3">
            <label for="password" class="font-weight-bold mb-2 fs-4">Password:</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Go!</button>
    </form>
    <?php 
        if(isset($params['flash']['error'])){
            echo "<div class='alert alert-danger mt-3' role='alert'>" . $params['flash']['error'] . "</div>";
            unset($params['flash']['error']);
        }
    ?>
</div>