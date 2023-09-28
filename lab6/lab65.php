<?php 
class ClaseBase {
    public function test(){
    echo "ClaseBase::test() llamada\n";}
    final public function masTests() {
    echo "ClaseBase::masTests() llamada\n";
        }
    }
        
    class ClaseHijo extends ClaseBase {
    public function masTests() {
    echo "ClaseHijo::masTests() llamada\n";
        }
    }
    //En este codigo podemos ver como hay un metodo final lo cual significa que 
    //no puede estar sobrescrito, sin embargo observamos que en la clase hija 
    //ocurre este suceso y por tal motivo php lo representa como un error
?>
