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
