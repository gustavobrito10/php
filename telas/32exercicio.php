<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Valor em Porcentagem</title>
</head>
<body>
    <form method="POST">
        <label for="valor">Valor decimal (ex: 0.25):</label>
        <input type="number" step="any" id="valor" name="valor" required />
        <br><br>

        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['valor'])){
                $valor = $_POST['valor'];
                $resultado = $valor * 100;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['valor'])){
            echo "<br>O valor em porcentagem é: ".$resultado."%";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
