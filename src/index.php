<?php
$num1 = 0;
$num2 = 0;
$result = "";

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
}

if (isset($_POST['suma'])) {
    $result = "El resultado de la suma es: " . calcularSuma($num1, $num2);
}

if (isset($_POST['resta'])) {
    $result = "El resultado de la resta es: " . calcularResta($num1, $num2);
}

if (isset($_POST['multiplicacion'])) {
    $result = "El resultado de la multiplicación es: " . calcularMultiplicacion($num1, $num2);
}

if (isset($_POST['division'])) {
    if ($num2 != 0) {
        $result = "El resultado de la división es: " . calcularDivision($num1, $num2);
    } else {
        $result = "Error: No se puede dividir por cero.";
    }
}

if (isset($_POST['potencia'])) {
    $result = "El resultado de la potencia es: " . calcularPotencia($num1, $num2);
}

function calcularPotencia($num1, $num2)
{
    return pow($num1, $num2);
}

function calcularResta($num1, $num2)
{
    return $num1 - $num2;
}

function calcularDivision($num1, $num2)
{
    return $num1 / $num2;
}

function calcularSuma($num1, $num2)
{
    return $num1 + $num2;
}

function calcularMultiplicacion($num1, $num2)
{
    return $num1 * $num2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .buttons {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="calculator">
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <label>Numero 1:</label>
        <input type="number" name="num1" required>

        <label>Numero 2:</label>
        <input type="number" name="num2" required>

        <div class="buttons">
            <input type="submit" name="suma" value="Sumar">
            <input type="submit" name="resta" value="Restar">
            <input type="submit" name="multiplicacion" value="Multiplicar">
            <input type="submit" name="division" value="Dividir">
            <input type="submit" name="potencia" value="Potencia">
        </div>
    </form>

    <?php if ($result !== ""): ?>
        <div class="result"><?= $result ?></div>
    <?php endif; ?>
</div>
</body>
</html>
