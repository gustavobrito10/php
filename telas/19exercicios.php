<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tempo até 100 anos</title>
</head>
<body>
    <form method="POST">
        <label for="idade">Idade atual:</label>
        <input type="number" id="idade" name="idade" required />
        <br><br>

        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['idade'])){
                $idade = $_POST['idade'];
                $resultado = 100 - $idade;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['idade'])){
            echo "<br>Faltam ".$resultado." anos para completar 100 anos.";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
