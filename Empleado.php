<?php

class Empleado {
    private $nombre;
    private $apellido;
    private $id;
    private $sueldoBase;

    // Constructor
    public function __construct($nombre, $apellido, $id, $sueldoBase) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->id = $id;
        $this->sueldoBase = $sueldoBase;
    }

    // Métodos getter
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getId() {
        return $this->id;
    }

    public function getSueldoBase() {
        return $this->sueldoBase;
    }

    // Métodos setter
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSueldoBase($sueldoBase) {
        $this->sueldoBase = $sueldoBase;
    }

    public function calcularSueldo() {
        return $this->sueldoBase;
    }

    public function mostrarDetalles() {
        return 'Nombre: ' . $this->nombre . ' | Apellido: ' . $this->apellido . ' | Id: ' . $this->id . ' | Sueldo Base: ' . $this->sueldoBase;
    }
}


?>