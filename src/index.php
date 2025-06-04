<?php
    $num1 = 0;
    $num2 = 0;
    $result = 0;

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
}


if(isset($_POST['suma'])){
        $result = caluclarSuma($num1, $num2);
        echo "El resultado de la suma es: ".$result;
    }

if(isset($_POST['resta'])){
    $result = calcularResta($num1, $num2);
    echo "El resultado de la resta es: ".$result;
}

if(isset($_POST['multiplicacion'])){
    $result = calcularMultiplicacion($num1, $num2);
    echo "El resultado de la multiplicacion es: ".$result;
}


if(isset($_POST['division'])){
    $result = calcularDivision($num1, $num2);
    echo "El resultado de la division es: ".$result;
}

function calcularResta($num1, $num2)
{
    $result = $num1 - $num2;
    return $result;
}

function calcularDivision($num1, $num2)
{
    $result = $num1 / $num2;
    return $result;
}

function caluclarSuma($num1, $num2)
{
    $result = $num1 + $num2;
    return $result;
}

function calcularMultiplicacion($num1, $num2)
{
    $result = $num1 * $num2;
    return $result;

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="">
    <br>
    <label>Numero 1: </label>
    <input type="number" name="num1">
    <br>
    <label>Numero 2: </label>
    <input type="number" name="num2">
    <br>
    <br>
    <input type="submit" name="suma" value="Sumar" />
    <input type="submit" name="resta" value="Restar" />
    <input type="submit" name="dividir" value="Multiplicar" />
    <input type="submit" name="multiplicar" value="Dividir" />
    <input type="submit" name="potencia" value="Potencia" />
</form>
</body>
</html>