<?php
require_once "config/database.php";

class Usuario {
    private $conn;
    private $table_name = "usuarios";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function obtenerUsuarios() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crearUsuario($nombre_usuario, $contraseña, $id_perfil) {
        $query = "INSERT INTO " . $this->table_name . " (nombre_usuario, contraseña, id_perfil) VALUES (:nombre_usuario, :contraseña, :id_perfil)";
        $stmt = $this->conn->prepare($query);
        $hashed_password = password_hash(trim($contraseña), PASSWORD_BCRYPT);
        $stmt->bindParam(":nombre_usuario", $nombre_usuario);
        $stmt->bindParam(":contraseña", $hashed_password);
        $stmt->bindParam(":id_perfil", $id_perfil);
        return $stmt->execute();
    }

    public function eliminarUsuario($id_usuario) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_usuario", $id_usuario);
        return $stmt->execute();
    }
}
