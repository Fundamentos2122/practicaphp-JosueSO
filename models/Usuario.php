<?php 

class Usuario {
    private $_id;
    private $_nombre_usuario;
    private $_contrasena;
    private $_tipo_rol;

    public function __construct($id, $nombre_usuario, $contrasena, $tipo_rol) {
        $this->setId($id);
        $this->setNombreUsuario($nombre_usuario);
        $this->setContrasena($contrasena);
        $this->setTipoRol($tipo_rol);
    }

    public function getId() {
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    public function getNombreUsuario() {
        return $this->_nombre_usuario;
    }

    public function setNombreUsuario($nombre_usuario) {
        $this->_nombre_usuario = $nombre_usuario;
    }

    public function getContrasena() {
        return $this->_contrasena;
    }

    public function setContrasena($contrasena) {
        $this->_contrasena = $contrasena;
    }

    public function getTipoRol() {
        return $this->_tipo_rol;
    }

    public function setTipoRol($tipo_rol) {
        $this->_tipo_rol = $tipo_rol;
    }
}

?>