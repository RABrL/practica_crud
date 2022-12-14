<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/head.php');
    require_once('/var/www/html/coex/practica_crud/controller/usernameController.php');
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="/coex/practica_crud/view/username/create.php" class='btn btn-primary'>Agregar nuevo usuario</a>
</div>
<table class='table'>
    <thead>
        <tr>
            <th class='col'>ID</th>
            <th class='col'>Nombre</th>
            <th class='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row):?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td>
                        <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Editar</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row['id']?>">
                        Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Esta seguro que desea eliminar a '<?= $row['nombre'] ?>'?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado el registro no se podra recuperar
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Volver</button>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td colspan='3' class="text-center">No hay usuarios registrados</td>
            </tr>
        <?php endif;?>
    </tbody>
</table>
<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/footer.php');
?>