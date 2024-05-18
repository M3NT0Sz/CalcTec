<?php
session_start();
require_once "funcoesCalculo.php";

$resultado = "";
if (isset($_POST['inputNum1']) && isset($_POST['inputNum2'])) {
    $numeros1 = $_POST['inputNum1'];
    $numeros2 = $_POST['inputNum2'];

    if ($_POST['selectOperacoes'] == "adicao") {
        $resultado = $numeros1 . " + " . $numeros2 . " = " . adicao($numeros1, $numeros2);
    } else if ($_POST['selectOperacoes'] == "subtracao") {
        $resultado = $numeros1 . " - " . $numeros2 . " = " . subtracao($numeros1, $numeros2);
    } else if ($_POST['selectOperacoes'] == "multiplicacao") {
        $resultado = $numeros1 . " x " . $numeros2 . " = " . multiplicacao($numeros1, $numeros2);
    } else {
        $resultado = $numeros1 . " / " . $numeros2 . " = " . divisao($numeros1, $numeros2);
    }
    $_SESSION['resultado'] = $resultado;

    header('location: ../index.php');
    die();
}

if (isset($_POST['inputTemperatura'])) {
    $temperatura = $_POST['inputTemperatura'];
    if ($_POST['selectTemperatura'] == "celsiusParaFahrenheit") {
        $resultado = $temperatura . "°C em Fahrenheit é: " . celsiusParaFahrenheit($temperatura);
    } else {
        $resultado = $temperatura . "°F em Celsius é: " . fahrenheitParaCelsius($temperatura);
    }
    $_SESSION['resultado'] = $resultado;

    header('location: ../temperatura.php');
    die();
}

if (isset($_GET['inputComprimento'])) {
    $comprimento = $_GET['inputComprimento'];
    if ($_GET['selectComprimentos'] == "centimentrosParaMetros") {
        $resultado = $comprimento . " Centimetros para Metros é: " . centimentrosParaMetros($comprimento);
    } else if ($_GET['selectComprimentos'] == "metrosParaCentimetros") {
        $resultado = $comprimento . " Metros para Centimetros é: " . metrosParaCentimetros($comprimento);
    } else if ($_GET['selectComprimentos'] == "metrosParaQuilometros") {
        $resultado = $comprimento . " Metros para Quilômetros é: " . metrosParaQuilometros($comprimento);
    } else {
        $resultado = $comprimento . " Quilômetros para Metros é: " . quilometrosParaMetros($comprimento);
    }
    $_SESSION['resultado'] = $resultado;

    header('location: ../conversor.php');
    die();
}
