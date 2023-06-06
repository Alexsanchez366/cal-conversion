<?php
//SRP

class ConversorVolumen {
    public function convertirLitrosAGalones($litros) {
        return number_format($litros * 0.264172, 2); // 1 litro a galones
    }
    
    public function convertirLitrosATazas($litros) {
        return number_format($litros * 4.22675, 2); // 1 litro a tazas
    }
    
    public function convertirLitrosAOnzas($litros) {
        return number_format($litros * 33.814, 2); // 1 litro a onzas
    }
    
    public function convertirLitrosACuartos($litros) {
        return number_format($litros * 1.05669, 2); // 1 litro a cuartos
    }
}


?>
