<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Graus para Radianos</title>
</head>
<body>
    <form method="POST">
        <label for="graus">Ângulo em graus:</label>
        <input type="number" step="any" id="graus" name="graus" required />
        <br><br>

        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['graus'])){
                $graus = $_POST['graus'];
                $resultado = deg2rad($graus);
            }
        ?>
    </form>

    <?php
        if(isset($_POST['graus'])){
            echo "<br>O ângulo em radianos é: ".$resultado." rad";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
