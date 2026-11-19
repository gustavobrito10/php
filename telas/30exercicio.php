<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Juros Compostos</title>
</head>
<body>
    <form method="POST">
        <label for="capital">Capital Inicial (R$):</label>
        <input type="number" step="any" id="capital" name="capital" required />
        <br><br>

        <label for="taxa">Taxa de Juros (% ao período):</label>
        <input type="number" step="any" id="taxa" name="taxa" required />
        <br><br>

        <label for="tempo">Tempo (períodos):</label>
        <input type="number" step="any" id="tempo" name="tempo" required />
        <br><br>

        <button type="submit">Calcular Montante</button>
        <?php
            if(isset($_POST['capital']) && isset($_POST['taxa']) && isset($_POST['tempo'])){
                $c = $_POST['capital'];
                $i = $_POST['taxa'] / 100;
                $t = $_POST['tempo'];
                $montante = $c * pow((1 + $i), $t);
                $resultado = number_format($montante, 2, ',', '.');
            }
        ?>
    </form>

    <?php
        if(isset($_POST['capital']) && isset($_POST['taxa']) && isset($_POST['tempo'])){
            echo "<br>O montante final é: R$ ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
