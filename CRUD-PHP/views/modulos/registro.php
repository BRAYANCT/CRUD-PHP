<!-- registro  -->
<div class="text-center">
    <h1>Registro</h1>
    <div class="d-flex justify-content-center">
        <form class="p-5 " method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <div class="input-group">

                    <input type="text" name="registroNombre" class="form-control" id="nombre">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>

                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" name="registroEmail" class="form-control" id="email">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></i></span>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="registroPassword" class="form-control" id="password">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></i></span>
                </div>
            </div>
            <?php
            $regsitro =  ControladorFormularios::ctrRegistro();
           /*  $regsitro-> ctrRegistro(); */
           if ( $regsitro =="ok") {
            echo' 
            <script>
                 if (window.history.replaceState ) {
                      window.history.replaceState(null,null,window.location.href)
                     }     
             </script>';
                echo'<div class="alert alert-success ">El usuario se ha registrado cone exito</div>';
           }       
            ?>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>