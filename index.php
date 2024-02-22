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

    <div>
        <h1>CALCULDORA</h1>
    </div>

    <div class="divc">
        <form class="calculator" action="operacoes.php" method="get">
                <h3>Calculadora Quatro Operações</h3>
                <div class="caixatexto">
                    <input type="text" id="number1" name="number1" placeholder="Number 1" />
                    <input type="text" id="number2" name="number2" placeholder="Number 2" />
                </div>
                <select id="operacao" class="select" name="operacao">
                    <option> </option>
                    <option value="Soma">Soma</option>
                    <option value="Subtracao">Subtracao</option>
                    <option value="Divisao">Divisao</option>
                    <option value="Multiplicacao">Multiplicacao</option>
                    <option value="Raiz">Radiciação</option>
                    <option value="Potencia">Potênciação</option>
                </select>
                    <button type="submit" class="calcular">Calcular</button>
        </form>
    </div>
</body>
</html>

  <?php
   ?>
