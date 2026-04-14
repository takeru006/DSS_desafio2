<?php
require_once('seguridad.php');

spl_autoload_register(function ($class_name){
    require("class/" . $class_name . ".class.php");
});

$menu = array(
    "home.php" => "Inicio",
    "salir.php" => "Salir"
);

$homepage = new page(
    "Sistema de Asistencia",
    "asistencia, estudiantes",
    $menu
);

$homepage->content = <<<PAGE
<div class="rediv" id="contenido">

<h4 style="text-align:center;">
<span>Bienvenido {$_SESSION['nombreusr']}</span>
</h4>

<p style="text-align:center;">
<img src="imagenes/foto_indexflt.jpg" width="715" height="350" style="border-radius:10px;" />
</p>

<p>&nbsp;</p>

<!-- TARJETA -->
<div style="
    max-width:400px;
    margin: auto;
    padding:20px;
    background:#f9f9f9;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    text-align:center;
">

    <h3>Registro de Asistencia</h3>

    <!-- FECHA -->
    <p id="fecha" style="font-weight:bold;"></p>

    <!-- BOTÓN -->
    <button id="btnAsistencia" style="
        background:#007BFF;
        color:white;
        border:none;
        padding:12px 25px;
        font-size:16px;
        border-radius:8px;
        cursor:pointer;
        transition:0.3s;
    ">
        Marcar Asistencia
    </button>

    <!-- MENSAJE -->
    <p id="mensaje" style="margin-top:15px; font-weight:bold;"></p>

</div>

<p>&nbsp;</p>

</div>

<!-- SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {

    var btn = document.getElementById("btnAsistencia");
    var mensaje = document.getElementById("mensaje");
    var fecha = document.getElementById("fecha");

    // Mostrar fecha actual
    var hoy = new Date();
    fecha.innerHTML = "Hoy es: " + hoy.toLocaleDateString();

    if (btn) {
        btn.addEventListener("click", function() {

            mensaje.innerHTML = " Asistencia marcada correctamente";
            mensaje.style.color = "green";

            btn.disabled = true;
            btn.innerText = "✔ Asistencia registrada";
            btn.style.background = "gray";

        });
    }
});
</script>
PAGE;

echo $homepage->display();
?>