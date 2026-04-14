<?php
session_start();

try {
    $pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);

    $sql = "SELECT id, usuario, contrasena, nombre, apellido FROM usuario WHERE usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$usuario]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($contrasena, $user['contrasena'])) {

        $_SESSION["autenticado"] = "si"; 
        $_SESSION["usuario_id"] = $user['id'];
        $_SESSION["usuario"] = $user['usuario'];
        $_SESSION["nombreusr"] = $user['nombre'] . " " . $user['apellido'];

        header("Location: home.php"); 
        exit();

    } else {
        header("Location: login.php?error=1");
        exit();
    }

} catch (PDOException $e) {
    echo "Error en el sistema.";
}
?>