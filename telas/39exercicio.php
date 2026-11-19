<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Múltiplo Mais Próximo de 10</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Número:</label>
        <input type="number" step="any" id="numero" name="numero" required />
        <br><br>

        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['numero'])){
                $num = $_POST['numero'];
                $resultado = round($num / 10) * 10;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>O múltiplo de 10 mais próximo é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
