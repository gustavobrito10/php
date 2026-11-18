<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Número inteiro:</label>
        <input type="number" id="numero" name="numero" required />
        <br><br>
 
        <button type="submit">Verificar</button>
        <?php
            $resultado = isset($_POST['numero']) ? (($_POST['numero'] % 2 == 0) ? "Par" : "Ímpar") : "";
        ?>
    </form>
 
    <?php
        echo ($resultado != "") ? "<br>O número é: ".$resultado : "<br>Preencha os campos!";
    ?>
</body>
</html>