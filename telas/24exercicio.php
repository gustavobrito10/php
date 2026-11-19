<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inverso Multiplicativo</title>
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
                $resultado = ($num != 0) ? (1 / $num) : "Indefinido (divisão por zero)";
            }
        ?>
    </form>

    <?php
        if(isset($_POST['numero'])){
            echo "<br>O inverso multiplicativo é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
