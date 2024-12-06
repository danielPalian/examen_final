<?php
// Cargar el controlador y los modelos necesarios
require_once "controllers/UsuarioController.php";

// Crear una instancia del controlador
$controller = new UsuarioController();

// Comprobar qué acción ejecutar
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar':
        // Mostrar la lista de usuarios
        $controller->index();
        break;

    case 'crear':
        // Si el formulario es enviado, procesar los datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre_usuario = $_POST['nombre_usuario'];
            $contraseña = $_POST['contraseña'];
            $id_perfil = $_POST['id_perfil'];

            $controller->crear($nombre_usuario, $contraseña, $id_perfil);
        } else {
            // Mostrar el formulario para crear un usuario
            include "views/usuarios/crear.php";
        }
        break;

    case 'eliminar':
        // Eliminar un usuario según el ID
        if (isset($_GET['id'])) {
            $id_usuario = $_GET['id'];
            $controller->eliminar($id_usuario);
        }
        break;

    default:
        echo "Acción no reconocida.";
        break;
}
