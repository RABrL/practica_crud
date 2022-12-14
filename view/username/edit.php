<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/head.php');
    require_once('/var/www/html/coex/practica_crud/controller/usernameController.php');
    $obj = new UsernameController();
    $user = $obj->show($_GET["id"]);
?>
<form action="update.php" method="POST" autocomplete="off">
    <h2>Modificando registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="id" value="<?= $user['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name='nombre' value="<?= $user['nombre']?>">
        </div>
    </div>
    <button  type="submit" class="btn btn-success">Guardar cambios</button>
    <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>
<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/footer.php');
?>