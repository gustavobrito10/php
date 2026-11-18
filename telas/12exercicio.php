<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Volume da Caixa</title>
</head>
<body>
    <form method="POST">
        <label for="comprimento">Comprimento:</label>
        <input type="number" step="any" id="comprimento" name="comprimento" required />
        <br><br>
 
        <label for="largura">Largura:</label>
        <input type="number" step="any" id="largura" name="largura" required />
        <br><br>
 
        <label for="altura">Altura:</label>
        <input type="number" step="any" id="altura" name="altura" required />
        <br><br>
 
        <button type="submit">Calcular Volume</button>
        <?php
            if(isset($_POST['comprimento']) && isset($_POST['largura']) && isset($_POST['altura'])){
                $comp = $_POST['comprimento'];
                $larg = $_POST['largura'];
                $alt = $_POST['altura'];
                $resultado = $comp * $larg * $alt;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['comprimento']) && isset($_POST['largura']) && isset($_POST['altura'])){
            echo "<br>O volume da caixa é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>