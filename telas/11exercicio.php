<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Triângulo</title>
</head>
<body>
    <form method="POST">
        <label for="base">Base:</label>
        <input type="number" step="any" id="base" name="base" required />
        <br><br>
 
        <label for="altura">Altura:</label>
        <input type="number" step="any" id="altura" name="altura" required />
        <br><br>
 
        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['base']) && isset($_POST['altura'])){
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $resultado = ($base * $altura) / 2;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['base']) && isset($_POST['altura'])){
            echo "<br>A área do triângulo é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>