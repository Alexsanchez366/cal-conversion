<?php
include("classLongitud.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valor = $_POST["valor"];
  $unidad = $_POST["unidad"];

  switch ($unidad) {
    case "mm_cm":
      $conversion = new MilimetroCentimetro($valor);
      break;
    case "cm_mm":
      $conversion = new CentimetroMilimetro($valor);
      break;
  
  }



  echo $conversion->getValue();
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="longitud.css">
</head>
<body>
  <div>
    <p>Resultado de la conversión</p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p id="parrafo"><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <a href="longitud.html" data-custom="mi-enlace">Volver</a>
    </div>
</body>
</html>