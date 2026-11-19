<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Trapézio</title>
</head>
<body>
    <form method="POST">
        <label for="baseMaior">Base Maior:</label>
        <input type="number" step="any" id="baseMaior" name="baseMaior" required />
        <br><br>

        <label for="baseMenor">Base Menor:</label>
        <input type="number" step="any" id="baseMenor" name="baseMenor" required />
        <br><br>

        <label for="altura">Altura:</label>
        <input type="number" step="any" id="altura" name="altura" required />
        <br><br>

        <button type="submit">Calcular Área</button>
        <?php
            if(isset($_POST['baseMaior']) && isset($_POST['baseMenor']) && isset($_POST['altura'])){
                $B = $_POST['baseMaior'];
                $b = $_POST['baseMenor'];
                $h = $_POST['altura'];
                $resultado = (($B + $b) * $h) / 2;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['baseMaior']) && isset($_POST['baseMenor']) && isset($_POST['altura'])){
            echo "<br>A área do trapézio é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
