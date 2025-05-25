<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validación simple
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user === 'admin' && $pass === 'admin') {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit();
    } else {
        $error = "Credenciales inválidas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - TaskFlow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>
