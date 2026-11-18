<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Idade em Meses</title>
</head>
<body>
    <form method="POST">
        <label for="anos">Idade em anos:</label>
        <input type="number" id="anos" name="anos" required />
        <br><br>
 
        <button type="submit">Converter</button>
        <?php
            if(isset($_POST['anos'])){
                $anos = $_POST['anos'];
                $resultado = $anos * 12;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['anos'])){
            echo "<br>A idade em meses é: ".$resultado." meses";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>