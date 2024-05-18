<?php

function adicao($num1, $num2)
{
    return ($num1 + $num2);
}

function subtracao($num1, $num2)
{
    return ($num1 - $num2);
}

function multiplicacao($num1, $num2)
{
    return ($num1 * $num2);
}

function divisao($num1, $num2)
{
    return ($num1 / $num2);
}

function celsiusParaFahrenheit($temperatura)
{
    return (32 + ($temperatura * 1.8));
}

function fahrenheitParaCelsius($temperatura)
{
    return (($temperatura - 32) / 1.8);
}

function centimentrosParaMetros($comprimento)
{
    return ($comprimento / 100);
}

function metrosParaCentimetros($comprimento)
{
    return ($comprimento * 100);
}

function metrosParaQuilometros($comprimento)
{
    return ($comprimento / 1000);
}

function quilometrosParaMetros($comprimento)
{
    return ($comprimento * 1000);
}

