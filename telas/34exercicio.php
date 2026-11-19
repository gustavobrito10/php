<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Parte Inteira e Decimal</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Número decimal (ex: 12.75):</label>
        <input type="number" step="any" id="numero" name="numero" required />
        <br><br>

        <button type="submit">Separar</button>
        <?php
            if(isset($_POST['numero'])){
                $num = (float)$_POST['numero'];
                $inteira = (int)$num;
                $decimal = round($num - $inteira, 10);
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>Parte inteira: ".$inteira." | Parte decimal: ".$decimal;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
