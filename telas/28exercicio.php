<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Raiz Cúbica</title>
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
                $resultado = pow($num, 1/3);
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>A raiz cúbica é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
