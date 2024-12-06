<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="POST" action="index.php?action=crear">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>

        <label for="id_perfil">Perfil:</label>
        <select id="id_perfil" name="id_perfil" required>
            <option value="1">Administrador</option>
            <option value="2">Editor</option>
            <option value="3">Lector</option>
        </select><br>

        <button type="submit">Crear</button>
    </form>
    <br>
    <a href="index.php">Regresar a la lista</a>
</body>
</html>
