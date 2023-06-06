<?php

include("classDato.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $megabyte = $_POST['megabyte'];
    $unit = $_POST['unit'];

    switch ($unit) {
        case 'gigabyte':
            $result = DataConverter::convertMegabyteToGigabyte($megabyte);
            break;
        case 'terabyte':
            $result = DataConverter::convertMegabyteToTerabyte($megabyte);
            break;
        case 'petabyte':
            $result = DataConverter::convertMegabyteToPetabyte($megabyte);
            break;
        default:
            $result = "Unidad de conversión no válida";
            break;
    }

    echo "Megabyte: " . $megabyte . "<br>";
    echo "Resultado: " . $result . " " . ucfirst($unit) . "<br>";
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./dato.css">
</head>
<body>
    <p>Resultado de la conversión</p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <br>
    <a href="Dato.html"  data-custom="mi-enlace">Volver</a>
</body>
</html>
