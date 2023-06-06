<?php
include("classMasa.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $valor = $_POST['valor'];
    $conversion = $_POST['conversion'];
  
    $validator = new NumericValidator();
  
    try {
      $conversor = new ConversorPeso($valor, $validator);
      $resultado = $conversor->getValue($conversion);
  
      echo  $resultado ;
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage() ;
    }
  }
  ?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="masa.css">
</head>
<body>
    <p>Resultado de la conversion</p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <br>
    <a href="Masa.html" data-custom="mi-enlace">Volver</a>
</body>
</html>