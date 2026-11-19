<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dias para Segundos</title>
</head>
<body>
    <form method="POST">
        <label for="dias">Quantidade de dias:</label>
        <input type="number" step="any" id="dias" name="dias" required />
        <br><br>

        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['dias'])){
                $dias = $_POST['dias'];
                $resultado = $dias * 86400; // 24h * 60m * 60s
            }
        ?>
    </form>

    <?php
        if(isset($_POST['dias'])){
            echo "<br>O valor em segundos é: ".$resultado." segundos";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
