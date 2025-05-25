<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TaskFlow - Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Bienvenido a TaskFlow</h1>
        <a href="logout.php" class="btn btn-danger mb-3">Cerrar sesión</a>
        <p>Aquí irá el tablero tipo Kanban (en desarrollo).</p>
    </div>
</body>
</html>
