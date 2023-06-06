<?php
include ("./classVolumen.php");

$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST["opcion"];
    $litros = $_POST["litros"];

    $conversor = new ConversorVolumen();

    switch ($opcion) {
        case 1:
            $resultado = $litros . ' litros es igual a ' . $conversor->convertirLitrosAOnzas($litros) . ' onzas.';
            break;
        case 2:
            $resultado = $litros . ' litros es igual a ' . $conversor->convertirLitrosAGalones($litros) . ' galones.';
            break;
        case 3:
            $resultado = $litros . ' litros es igual a ' . $conversor->convertirLitrosATazas($litros) . ' tazas.';
            break;
        case 4:
            $resultado = $litros . ' litros es igual a ' . $conversor->convertirLitrosACuartos($litros) . ' cuartos.';
            break;
    }
}

else {
    ($resultado !== '');
} 

    echo $resultado;
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./volumen.css">
</head>
<body>
    <p> de la conversión</p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <br>
    <a href="volumen.html" data-custom="mi-enlace">Volver</a>
</body>
</html>