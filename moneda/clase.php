<?php

//usanado el open/closed de solid

interface Currency {
    public function getCode(): string;
    public function getExchangeRate(): float;
}

class Euro implements Currency {
    public function getCode(): string {
        return 'EUR';
    }
    
    public function getExchangeRate(): float {
        return 0.85;
    }
}

class PesoMexicano implements Currency {
    public function getCode(): string {
        return 'MXN';
    }
    
    public function getExchangeRate(): float {
        return 20.25;
    }
}

class Yen implements Currency {
    public function getCode(): string {
        return 'JPY';
    }
    
    public function getExchangeRate(): float {
        return 110.50;
    }
}


?>