<?php
class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";}
        // Aquí da igual si se declara el método como
        // final o no
        final public function moreTesting() {
            echo "ClaseBase::moreTesting() llamada\n";}
            }
            class ClaseHijo extends ClaseBase {}
            //En este código podemos identificar como el método final esta en 
            //la clase hijo, lo cual significa que no puede sobrescribirse o 
            //sin embargo en este caso al estar es valido y 
            //simplemente hereda los métodos de la clase padre 
            ?>