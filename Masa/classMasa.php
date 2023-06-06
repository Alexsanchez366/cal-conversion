<?php
//SRP

interface Validatable {
    public function validate($value): bool;
  }
  
  class NumericValidator implements Validatable {
    public function validate($value): bool {
      return is_numeric($value);
    }
  }
  
  class ConversorPeso {
    private $valor;
  
    public function __construct($valor, Validatable $validator) {
      $this->validator = $validator;
  
      if ($this->validate($valor)) {
        $this->valor = $valor;
      } else {
        throw new InvalidArgumentException("Error: El valor ingresado no es válido");
      }
    }
  
    public function validate($value): bool {
      return $this->validator->validate($value);
    }
  
    public function kilosToLibras() {
      return $this->valor * 2.2046;
    }
  
    public function kilosToGramos() {
      return $this->valor * 1000;
    }
  
    public function getValue($conversion) {
      $resultado = 0;
  
      switch ($conversion) {
        case 'kilosToLibras':
          $resultado = $this->kilosToLibras();
          $unidad = 'libras';
          break;
        case 'kilosToGramos':
          $resultado = $this->kilosToGramos();
          $unidad = 'gramos';
          break;
        default:
          throw new InvalidArgumentException("Error: Conversión no válida");
      }
  
      return "El resultado de la conversión es: " . $resultado . " " . $unidad;
    }
  
    public function setValue($value) {
      if ($this->validate($value)) {
        $this->valor = $value;
      } else {
        throw new InvalidArgumentException("Error: El valor ingresado no es válido");
      }
    }
  }
  ?>

