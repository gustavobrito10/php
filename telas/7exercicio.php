<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Celsius para Fahrenheit</title>
</head>
<body>
    <form method="POST">
        <label for="celsius">Temperatura em Celsius (°C):</label>
        <input type="number" step="any" id="celsius" name="celsius" required />
        <br><br>
 
        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['celsius'])){
                $celsius = $_POST['celsius'];
                $resultado = ($celsius * 1.8) + 32;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['celsius'])){
            echo "<br>A temperatura em Fahrenheit é: ".$resultado." °F";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>