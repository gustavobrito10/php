<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Média Aritmética</title>
</head>
<body>
    <form method="POST">
        <label for="primeiroNumero">Primeiro Número:</label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero" required />
        <br><br>
 
        <label for="segundoNumero">Segundo Número:</label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero" required />
        <br><br>
 
        <button type="submit">Calcular Média</button>
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $resultado = ($num1 + $num2) / 2;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
            echo "<br>A média aritmética é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>