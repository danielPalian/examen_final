<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>
    <header>
        <h1>Crear Usuario</h1>
    </header>
    <div class="container">
        <form method="POST" action="index.php?action=crear">
            <label for="nombre_usuario">Nombre de Usuario</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <label for="id_perfil">Perfil</label>
            <select id="id_perfil" name="id_perfil" required>
                <option value="1">Administrador</option>
                <option value="2">Editor</option>
                <option value="3">Lector</option>
            </select>

            <button type="submit">Guardar Usuario</button>
        </form>
        <a href="index.php">Regresar a la lista</a>
    </div>
</body>
</html>
