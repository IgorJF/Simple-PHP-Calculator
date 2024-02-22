<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculadora PHP</title>
</head>

<body>

    <?php
    $operacao = $_GET["operacao"];
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $resultado = [];

    switch ($operacao) {
        case 'Soma':
            $resultado = $number1 + $number2;
            break;
        case 'Subtracao':
            $resultado = $number1 - $number2;
            break;
        case 'Divisao':
            if ($number2 == 0) {
                echo "<p>Não é possível dividir por 0.</p>";
            } else {
                $resultado = $number1 / $number2;
            }
            break;
        case 'Multiplicacao':
            $resultado = $number1 * $number2;
            break;
        case 'Potencia':
            $resultado = $number1 ** $number2;
            break;
        case 'Raiz':
            $resultado = $number1 ** (1 / $number2);
            break;
        default:
            echo "<p>Insira os valores.</p>";
    }

    ?>

    <div class="resultado">
        <p>Resultado:
            <?php echo $resultado; ?>
        </p>
    </div>
    <p><a href="index.php">Voltar</a></p>

</body>

</html>