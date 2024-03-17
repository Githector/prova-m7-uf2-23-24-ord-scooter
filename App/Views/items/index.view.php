<form action="/items/dni" method="POST" class="col-11 col-md-8 col-lg-6 col-xl-4 border mx-auto mt-5 p-4">
    <div class="mb-3">
        <label for="id_dni" class="form-label">Introdueix el teu DNI:</label>
        <input type="text" class="form-control" id="id_dni" placeholder="96874897A" name="dni">
    </div>
    <button type="submit" class="btn btn-primary">GO!</button>
    <?php

    if(isset($params['flash'])){
        echo "<div class='alert alert-danger mt-3' role='alert'>".$params['flash']['error']."</div>";
        unset($params['flash']);
    }
     ?>
    
</form>