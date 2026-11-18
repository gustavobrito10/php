<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Quadrado e Cubo</title>
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
                $quadrado = pow($num, 2);
                $cubo = pow($num, 3);
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['numero'])){
            echo "<br>Quadrado: ".$quadrado." | Cubo: ".$cubo;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>