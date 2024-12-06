<?php
require_once "controllers/UsuarioController.php";

$controller = new UsuarioController();
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar':
        $controller->index();
        break;

    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre_usuario = $_POST['nombre_usuario'];
            $contraseña = $_POST['contraseña'];
            $id_perfil = $_POST['id_perfil'];
            $controller->crear($nombre_usuario, $contraseña, $id_perfil);
        } else {
            include "views/usuarios/crear.php";
        }
        break;

    case 'eliminar':
        if (isset($_GET['id'])) {
            $id_usuario = $_GET['id'];
            $controller->eliminar($id_usuario);
        }
        break;

    default:
        echo "Acción no reconocida.";
        break;
}
