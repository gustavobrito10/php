<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desconto de 10%</title>
</head>
<body>
    <form method="POST">
        <label for="valor">Valor do Produto (R$):</label>
        <input type="number" step="any" id="valor" name="valor" required />
        <br><br>
 
        <button type="submit">Calcular Desconto</button>
        <?php
            if(isset($_POST['valor'])){
                $valor = $_POST['valor'];
                $resultado = number_format($valor * 0.90, 2, ',', '.');
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['valor'])){
            echo "<br>O valor com 10% de desconto é: R$ ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>