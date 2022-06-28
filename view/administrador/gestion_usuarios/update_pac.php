<?php
include "../../../controller/sesiones/sesiones_admin.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Usuarios</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/administrador-css/estilos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="../index_admin.php">Inicio</a></li>
                        <li><a href="../../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover"> 
                <div class="caja3">
                    <h1 class="titulo1">Actualizar datos</h1>
                    <div class="contact-wrapper animated bounceInUp">
                        <div class="contact-form">
                            <form action="gestion_usuarios_alerta3-2.php" method="POST">
                                <p>
                                    <label>Tipo de documento</label>
                                    <input type="text" name="t_doc" value="CC"disabled>
                                </p>
                                <p>
                                    <label>N° documento</label>
                                    <input type="number" name="num_doc" value=1001096345 disabled>
                                </p>
                                <p>
                                    <label>1° nombre</label>
                                    <input type="text" name="p_nombre" value="Estevan" disabled>
                                </p>
                                <p>
                                    <label>2° nombre</label>
                                    <input type="text" name="s_nombre" value="" disabled>
                                </p>
                                <p>
                                    <label>1° apellido</label>
                                    <input type="text" name="p_apellido" value="Hernandez" disabled>
                                </p>
                                <p>
                                    <label>2° apellido</label>
                                    <input type="text" name="s_apellido" value="" disabled>
                                </p>
                                <p>
                                    <label>Teléfono</label>
                                    <input type="tel" name="tel" value=3158160563>
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email" value="gerardogeet@hotmail.com">
                                </p>
                                <p>
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="f_nacimiento" required>
                                </p>
                                <p>
                                    <label>Estado paciente</label>
                                    <select class="Selectorconsult" name="tipo_doc" id="tipo_doc">
                                      <option >Seleccione</option>
                                        <option value="ac">Activo</option>
                                        <option value="dx">Inactivo</option>
                                    </select>
                                </p>
                                <p class="block">
                                    <button name="actualizar" type="submit">
                                        Actualizar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script src="../../assets/js-general/menu-responsive.js"></script>
</body>
</html>