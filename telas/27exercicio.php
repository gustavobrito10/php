<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Decimal para Hexadecimal</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Número inteiro:</label>
        <input type="number" id="numero" name="numero" required />
        <br><br>

        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['numero'])){
                $num = (int)$_POST['numero'];
                $resultado = strtoupper(dechex($num));
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>Em hexadecimal: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
