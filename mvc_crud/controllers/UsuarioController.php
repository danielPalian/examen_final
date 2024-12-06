<?php
require_once "models/Usuario.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    public function index() {
        $usuarios = $this->usuarioModel->obtenerUsuarios();
        include "views/usuarios/index.php";
    }

    public function crear($nombre_usuario, $contraseña, $id_perfil) {
        $this->usuarioModel->crearUsuario($nombre_usuario, $contraseña, $id_perfil);
        header("Location: index.php");
    }

    public function eliminar($id_usuario) {
        $this->usuarioModel->eliminarUsuario($id_usuario);
        header("Location: index.php");
    }
}

