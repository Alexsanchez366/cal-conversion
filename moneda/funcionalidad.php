<?php
include("./clase.php");

class CurrencyConverter {
    private $currencies = [];
    
    public function __construct() {
        $this->currencies = [
            new Euro(),
            new PesoMexicano(),
            new Yen()
        ];
    }
    
    public function convert($amount, Currency $targetCurrency) {
        $convertedAmount = $amount * $targetCurrency->getExchangeRate();
        return round($convertedAmount, 2);
    }
    
    public function getCurrencies() {
        return $this->currencies;
    }
}

$converter = new CurrencyConverter();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $targetCurrencyCode = $_POST["target_currency"];

    if (!is_numeric($amount)) {
        $result = "Por favor, ingresa solo números en el campo 'amount'.";
    } else {
        $currencies = $converter->getCurrencies();
        $targetCurrency = null;

        foreach ($currencies as $currency) {
            if ($currency->getCode() == $targetCurrencyCode) {
                $targetCurrency = $currency;
                break;
            }
        }

        if ($targetCurrency !== null) {
            $convertedAmount = $converter->convert($amount, $targetCurrency);
            $result = "{$amount} dólares equivale a {$convertedAmount} {$targetCurrency->getCode()}";
        } else {
            $result = "La moneda seleccionada no es válida.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./moneda.css">
</head>
<body>


    <div class="resultado">
    <p>Resultado de la conversión</p>
    <?php if (isset($result)): ?>
        <div class="result">
            <p class="text-resul"><?php echo $result; ?></p>
        </div>
    <?php endif; ?>
    <br>

    <a href="moneda.html" data-custom="mi-enlace">Volver</a>

    </div>


    
</body>
</html>