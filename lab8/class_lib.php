<?php
class Matriz {
    private $valor;
    private $matriz;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->matriz = array();
    }

    public function crearMatriz() {
        for ($i = 0; $i < $this->valor; $i++) {
            $fila = array();

            for ($j = 0; $j < $this->valor; $j++) {
                if ($i == $j ) {
                    $fila[] = 1; // Elementos de la diagonal principal son 1
                } else {
                    $fila[] = 0; // Otros elementos son 0
                }
            }
            $this->matriz[] = $fila;
        }
    }

    public function mostrarMatriz() {
        foreach ($this->matriz as $fila) {
            echo implode(" ", $fila) . "<br>";
        }
    }

    public function esValorPar() {
        return $this->valor % 2 == 0;
    }
}

class Arreglo {
    private $arreglo;

    public function __construct($valor) {
        $this->arreglo = array();
        for ($i = 0; $i < 5; $i++) {
            $this->arreglo[$i] = $valor;
        }
    }

    public function imprimirArreglo() {
        print_r($this->arreglo);
    }
}

class ArregloGenerator {
    private $arreglos;

    public function __construct() {
        $this->arreglos = array();
    }

    public function generarArreglo() {
        for ($i = 0; $i < 20; $i++) {
            $numero = rand(1, 50);
            while (in_array($numero, $this->arreglos)){
                $numero = rand(1, 50);
            }
            $this->arreglos[$i] = $numero;
        }
    }
    public function getArreglo() {
        return $this->arreglos;
    }

    public function encontrarMayor() {
        $mayor = max($this->arreglos);
        $iMayor = array_search($mayor, $this->arreglos);

        return "El elemento mayor se encuentra en la posición $iMayor = $mayor.";
    }
}
?>

