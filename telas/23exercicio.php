<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma dos Dígitos</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Número inteiro:</label>
        <input type="number" id="numero" name="numero" required />
        <br><br>

        <button type="submit">Somar Dígitos</button>
        <?php
            if(isset($_POST['numero'])){
                $num = abs((int)$_POST['numero']);
                $resultado = array_sum(str_split((string)$num));
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>A soma dos dígitos é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
