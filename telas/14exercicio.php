<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preço com Imposto</title>
</head>
<body>
    <form method="POST">
        <label for="preco">Preço do Produto (R$):</label>
        <input type="number" step="any" id="preco" name="preco" required />
        <br><br>
 
        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['preco'])){
                $preco = $_POST['preco'];
                $resultado = number_format($preco * 1.18, 2, ',', '.');
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['preco'])){
            echo "<br>O preço com 18% de imposto é: R$ ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>