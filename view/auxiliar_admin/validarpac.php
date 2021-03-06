<?php
include "../../controller/sesiones/sesiones_aux.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Pacientes</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/auxiliar-admin-css/estilos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../assets/images/icon_auxadmin.png" alt="">
                    <ul>
                        <li><a href="index_aux.php">Inicio</a></li>
                        <li><a href="update_info_aux/update_aux.php">Actualizar datos</a></li>
                        <li><a href="../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover"> 
                <div class="caja3">
                    <h1>Citas Pacientes</h1>
                    <div class="contenedor__login-register">
                        <form action="view_citas/citaspac.php" class="" method="POST">
                            <select class="Selectordoc" name="tipo_doc" id="tipo_doc">
                                <option >Elige el tipo de documento</option>
                                <option value="CC">Cedula de ciudadania</option>
                                <option value="TI">Tarjeta de identidad</option>
                                <option value="PAP">Pasaporte</option>
                                <option value="CE">Cedula de extranjeria</option>
                            </select>
                            <br>
                            <input type="text" placeholder="Numero de documento" id="numerodedocuemto" name="num_doc_pers" class="contenedor1"> 
                            <br>
                            <br>
                            <input type="submit" name="consultar" class="boton4" value="Consultar">
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script src="../assets/js-general/menu-responsive.js"></script>
</body>
</html>