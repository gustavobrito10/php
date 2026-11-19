<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Densidade</title>
</head>
<body>
    <form method="POST">
        <label for="massa">Massa (kg ou g):</label>
        <input type="number" step="any" id="massa" name="massa" required />
        <br><br>

        <label for="volume">Volume (m³ ou cm³):</label>
        <input type="number" step="any" id="volume" name="volume" required />
        <br><br>

        <button type="submit">Calcular Densidade</button>
        <?php
            if(isset($_POST['massa']) && isset($_POST['volume'])){
                $m = $_POST['massa'];
                $v = $_POST['volume'];
                $resultado = ($v != 0) ? ($m / $v) : "Volume não pode ser zero";
            }
        ?>
    </form>

    <?php
        if(isset($_POST['massa']) && isset($_POST['volume'])){
            echo "<br>A densidade do objeto é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
