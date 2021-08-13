<!-- registro  -->
<?php
if (isset($_GET['id'])) {
    $item = "id";
    $valor =$_GET['id'];
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>

<div class="text-center">
    <h1>Editar</h1>
    <div class="d-flex justify-content-center">
        <form class="p-5 " method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <div class="input-group">

                    <input type="text" name="actualizarNombre" placeholder="actualizar Nombre" class="form-control" id="nombre"value="<?php echo $usuario["nombre"]?>">
                    <span class="input-group-text" id="basic-addon1" ><i class="fas fa-users"></i></span>

                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" name="actualizarEmail" placeholder="actualizar Email" class="form-control" id="email" value="<?php echo $usuario["correo"]?>">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope" ></i></i></span>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="actualizarPassword" placeholder="actualizar Password" class="form-control" id="password"value="">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt" ></i></i></span>
                <input type="hidden" name="passwordNormal"value="<?php echo $usuario["password"]?>">
                <input type="hidden" name="idUser"value="<?php echo $usuario["id"]?>">

                
                </div>
            </div>
            <?php
            $actualizar=new ControladorFormularios();
            $actualizar->ctrActualizarRegistro();
            ?>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

    </div>
</div>