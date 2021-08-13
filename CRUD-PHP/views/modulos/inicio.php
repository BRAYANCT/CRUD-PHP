<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
/* $actualizar=new ControladorFormularios();
$actualizar->ctrActualizarRegistro(); */
?>
<h1>Inicio</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Fecha de creacion</th>
            <th scope="col">Accion</th>

        </tr>
    </thead>
    <tbody>
<!--         <?php
        $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null,null);
       /*  foreach ($usuarios as $key => $value) {
            echo '
            <tr>
            <th scope="row">'.($key+1).'</th>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["correo"].'</td>
            <td>'.$value["password"].'</td>
            <td>'.$value["fecha"].'</td>
                <td>
                    <div>
                        <button class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </td>
            </tr>';
        } */
        ?> -->
        <?php foreach ($usuarios as $key => $value) :?>
        <tr>
            <th scope="row"><?php echo ($key+1)?></th>
            <td><?php echo $value["nombre"]?></td>
            <td><?php echo $value["correo"]?></td>
            <td><?php echo $value["password"]?></td>
            <td><?php echo $value["fecha"]?></td>
            <td>
                <div>
                    <a href="index.php?pagina=editar&id=<?php echo $value["id"]?>" class="btn btn-warning">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            </td>
        </tr>
        <?php endforeach ;?>
       
    </tbody>
</table>