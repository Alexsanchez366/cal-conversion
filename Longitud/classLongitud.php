<?php
// Liskov substitution principle

abstract class UnidadLongitud {
  protected $valor;

  public function __construct($valor) {
    if ($this->validate($valor)) {
      $this->valor = $valor;
    } else {
      echo "Error: El valor ingresado no es válido"."\n";
    }
  }

  abstract public function getValue();
  abstract public function setValue($valor);
  abstract protected function validate($valor);
}

class MilimetroCentimetro extends UnidadLongitud {
    public function getValue() {
      return 'La conversión de milímetros a centímetros es: '. $this->valor/10 . ' cm';
    }
  
    public function setValue($valor) {
      if ($this->validate($valor)) {
        $this->valor = $valor;
      } else {
        echo "Error: El valor ingresado no es válido"."\n";
      }
    }
  
    protected function validate($valor) {
      return is_numeric($valor);
    }
  }

class CentimetroMilimetro extends UnidadLongitud {
  public function getValue() {
    return 'La conversión de centímetros a milímetros es: '. $this->valor*10 . ' mlm';
  }

  public function setValue($valor) {
    if ($this->validate($valor)) {
      $this->valor = $valor;
    } else {
      echo "Error: El valor ingresado no es válido"."\n";
    }
  }

  protected function validate($valor) {
    return is_numeric($valor);
  }
}


?>