<?php

//Dependency Inversion Principle

interface ConversorTiempoInterface {
    public function convertirHoras($horas, $unidad);
}

class ConversorTiempo implements ConversorTiempoInterface {
    public function convertirHoras($horas, $unidad) {
        $minutos = $horas * 60;
        $dias = $horas / 24;
        $semanas = $dias / 7;

        switch ($unidad) {
            case 'minutos':
                return $minutos;
            case 'dias':
                return $dias;
            case 'semanas':
                return $semanas;
            default:
                return 0;
        }
    }
}

?>