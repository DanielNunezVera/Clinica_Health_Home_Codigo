<?php
include "../../../controller/sesiones/sesiones_prof.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos de profesional</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/profesional-css/estilos.css">
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
                    <img src="../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="../index_prof.php" >Inicio</a></li>
                        <li><a href="./update_prof.php">Actualizar datos</a></li>
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
                    <h1 class="titulo1">Actualizar Datos</h1>
                    <div class="contact-wrapper animated bounceInUp">
                        <div class="contact-form">
                            <form action="" method="POST">
                                <p>
                                    <label>Tipo de documento</label>
                                    <input type="text" name="t_doc" disabled>
                                </p>
                                <p>
                                    <label>N° documento</label>
                                    <input type="number" name="num_doc" disabled>
                                </p>
                                <p>
                                    <label>Primer nombre</label>
                                    <input type="text" name="p_nombre">
                                </p>
                                <p>
                                    <label>Segundo nombre</label>
                                    <input type="text" name="s_nombre">
                                </p>
                                <p>
                                    <label>Primer apellido</label>
                                    <input type="text" name="p_apellido">
                                </p>
                                <p>
                                    <label>Segundo apellido</label>
                                    <input type="text" name="s_apellido">
                                </p>
                                <p>
                                    <label>Teléfono</label>
                                    <input type="tel" name="tel">
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email">
                                </p>
                                <p>
                                    <label>Dias laborales (inicial)</label>
                                    <input value="lunes - viernes" name="dias_laborales" disabled>
                                </p>

                                <p>
                                    <label>Franja laboral (inicial)</label>
                                    <input value="7:00am - 7:00pm" name="franja_horaria" disabled>
                                </p>
                                
                                <p>
                                    <label>Contraseña</label>
                                    <input type="button" name="pass" value="Cambiar contraseña" onclick="contraseña()">
                                </p>
                                <p class="block">
                                    <button name="registrar" type="submit">
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