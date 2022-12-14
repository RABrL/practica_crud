<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/head.php');
    require_once('/var/www/html/coex/practica_crud/controller/usernameController.php');
    $obj = new UsernameController();
    $date = $obj->show($_GET["id"]);
?>
<div class="container ">

    <h2 class="text-center" >Detalles del registro</h2>
    <div class="pb-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
        <a href="edit.php?id=<?= $date['id'] ?>" class="btn btn-success">Actualizar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Eliminar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Esta seguro de eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado el registro no se podra recuperar
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Volver</button>
                    <a href="delete.php?id=<?= $date['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table container text-center">
        <thead>
            <th >ID</th>
            <th >NOMBRE</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td class='col col-2'><?= $date['id'] ?></td>
                <td class='col col-8'><?= $date['nombre'] ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php 
    require_once('/var/www/html/coex/practica_crud/view/head/footer.php');
?>