<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fahrenheit para Celsius</title>
</head>
<body>
    <form method="POST">
        <label for="fahrenheit">Temperatura em Fahrenheit (°F):</label>
        <input type="number" step="any" id="fahrenheit" name="fahrenheit" required />
        <br><br>

        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['fahrenheit'])){
                $f = $_POST['fahrenheit'];
                $resultado = ($f - 32) * 5 / 9;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['fahrenheit'])){
            echo "<br>A temperatura em Celsius é: ".round($resultado, 2)." °C";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
