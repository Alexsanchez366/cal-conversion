
<?php
include("./classTiempo.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $horas = $_POST['horas'];
    $unidad = $_POST['unidad'];

    $conversor = new ConversorTiempo();
    $resultado = $conversor->convertirHoras($horas, $unidad);

    echo "<h2>Resultados:</h2>";
    echo "Horas: " . $horas . "<br>";
    echo "Convertido a " . ucfirst($unidad) . ": " . $resultado . "<br>";
}
?>


<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" href="./tiempo.css">
</head>
<body>


    <div class="resultado">
    <p>resultado de la conversión </p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p class="text-resul"><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <br>

    <a href="Tiempo.html" data-custom="mi-enlace">Volver</a>

    </div>


    
</body>
</html>