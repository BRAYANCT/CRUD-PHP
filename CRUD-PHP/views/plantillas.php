<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>

    <!-- bootrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- bootrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <!-- fonjt aweson -->
    <script src="https://kit.fontawesome.com/6e4193c413.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./views/css/style.css">
</head>

<body>

    <!-- logo -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!-- botonera -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET['pagina'])) : ?>
                    <!-- pagina de registro -->
                    <?php if (($_GET['pagina']) == "registro") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php endif ?>
                    <!-- pagina de ingreso -->
                    <?php if (($_GET['pagina']) == "ingreso") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php endif ?>
                    <!-- pagina de inicio -->
                    <?php if (($_GET['pagina']) == "inicio") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php endif ?>
                    <!-- pagina de salir -->
                    <?php if (($_GET['pagina']) == "salir") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                <?php endif ?>

                <!--   -->
            </ul>
        </div>
    </div>

    <!-- inicio -->

    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET['pagina'])) {
                if ($_GET["pagina"] == "registro" || $_GET["pagina"] == "ingreso" || $_GET["pagina"] == "inicio" || $_GET["pagina"] == "salir"|| $_GET["pagina"] == "editar") {
                    include "modulos/" . $_GET['pagina'] . ".php";
                }else{
                    include "modulos/error404.php";
                }
            } else {
                include "modulos/registro.php";
            }
            ?>
        </div>
    </div>

</body>

</html>