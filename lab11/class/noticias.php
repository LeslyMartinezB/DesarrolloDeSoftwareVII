<?php
require_once('modelo.php');

class noticia extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct() {
        parent::__construct();
    }

    public function consultar_noticias() {
        $instruccion = "CALL sp_listar_noticias()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las noticias";
        }
        else{
            $consulta->close();
            $this->_db->close();
            return $resultado;
        }
    }  

    public function consultar_noticias_filtro($campo, $valor) {
        $instruccion = "CALL sp_listar_noticias_filtro('".$campo."','". $valor."')";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            $consulta->close();
            $this->_db->close();
            return $resultado;
        }
    }
    public function contar_noticias() {
        $instruccion = "SELECT COUNT(*) as total FROM noticias";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_assoc();

        if ($resultado) {
            $consulta->close();
            return $resultado['total'];
        } else {
            return 0;
        }
    }

    public function consultar_noticias_paginacion($inicio, $fin) {
        $instruccion = "SELECT * FROM noticias LIMIT $inicio, $fin";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            $consulta->close();
            return $resultado;
        } else {
            return array(); 
        }
    }
}
?>