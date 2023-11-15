<?php
require_once('modelo.php');

class Votos extends modeloCredencialesBD {
    public function __construct() {
        parent::__construct();
    }

    public function listarVotos() {
        $instruccion = "CALL sp_listar_votos()";
        $consulta = $this->_db->query($instruccion);

        if ($consulta === false) {
            echo "Error en la consulta: " . $this->_db->error;
            return null;
        }

        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $consulta->close();
        $this->_db->close();
        return $resultado;
    }

    public function actualizarVotos($votos1, $votos2) {
        $instruccion = "CALL sp_actualizar_votos('$votos1', '$votos2')";
        $actualiza = $this->_db->query($instruccion);

        if ($actualiza === false) {
            echo "Error en la consulta: " . $this->_db->error;
            return null;
        }

        // Aquí puedes hacer algo con el resultado de la consulta si es necesario

        $this->_db->close();
        return $actualiza;
    }
}
?>
