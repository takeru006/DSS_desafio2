<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <title>Sistema de Asistencia</title>
 <link rel="stylesheet" href="css/modernform.css" />
</head>
<body>
<header>
 <h1>Sistema de Control de Asistencia</h1>
</header>

<section>
<article>

<?php if(isset($_GET["error"]) && $_GET["error"]=="1"){ ?>
    <span class="error">Usuario o contraseña incorrectos</span>
<?php } else { ?>
    <span class="msg">Ingrese sus datos para marcar asistencia</span>
<?php } ?>

<div class="container">
<section class="tabblue">
 <ul class="tabs blue">
 <li>
 <input type="radio" name="tabs blue" id="tab1" checked="">
 <label for="tab1">Inicio de sesión</label>

 <div id="tab-content1" class="tab-content">
 <p>Ingrese sus datos de estudiante.</p>

 <form action="autenticacion.php" method="POST">
 
 <input type="text" name="usuario" placeholder="Usuario o correo" required class="field" />
 
 <input type="password" name="contrasena" placeholder="Contraseña" required class="field" />

 <div class="btn">
    <input type="submit" value="Ingresar" />
 </div>

 </form>
 </div>
 </li>
 </ul>
</section>
</div>

<p>
 Debes estar registrado para poder marcar tu asistencia diaria.
</p>

</article>
</section>
</body>
</html>