<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma e Média</title>
</head>
<body>
    <form method="POST">
        <label for="v1">Primeiro Valor:</label>
        <input type="number" step="any" id="v1" name="v1" required />
        <br><br>

        <label for="v2">Segundo Valor:</label>
        <input type="number" step="any" id="v2" name="v2" required />
        <br><br>

        <label for="v3">Terceiro Valor:</label>
        <input type="number" step="any" id="v3" name="v3" required />
        <br><br>

        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['v1']) && isset($_POST['v2']) && isset($_POST['v3'])){
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];
                $v3 = $_POST['v3'];
                $soma = $v1 + $v2 + $v3;
                $media = $soma / 3;
            }
        ?>
    </form>

    <?php
        if(isset($_POST['v1']) && isset($_POST['v2']) && isset($_POST['v3'])){
            echo "<br>Soma: ".$soma." | Média: ".$media;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
