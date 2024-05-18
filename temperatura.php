<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>

<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>

    <div class="div-conteudo">
        <form method="POST" action="logica/processamento.php">
            <label>Digite uma temperatura:</label>
            <input type="text" name="inputTemperatura" placeholder="Digite uma temperatura">
            <select name="selectTemperatura">
                <option value="celsiusParaFahrenheit">Celsius para Fahrenheit</option>
                <option value="fahrenheitParaCelsius">Fahrenheit para Celsius</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="resultado">
            <?php
            if (isset($_SESSION["resultado"])) {
                echo $_SESSION["resultado"];
                unset($_SESSION["resultado"]);
            }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>

</html>