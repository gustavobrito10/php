<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Média Ponderada</title>
</head>
<body>
    <form method="POST">
        <label for="nota1">Nota 1:</label>
        <input type="number" step="any" id="nota1" name="nota1" required />
        <label for="peso1">Peso 1:</label>
        <input type="number" step="any" id="peso1" name="peso1" required />
        <br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" step="any" id="nota2" name="nota2" required />
        <label for="peso2">Peso 2:</label>
        <input type="number" step="any" id="peso2" name="peso2" required />
        <br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" step="any" id="nota3" name="nota3" required />
        <label for="peso3">Peso 3:</label>
        <input type="number" step="any" id="peso3" name="peso3" required />
        <br><br>

        <button type="submit">Calcular Média</button>
        <?php
            if(isset($_POST['nota1']) && isset($_POST['peso1'])){
                $n1 = $_POST['nota1']; $p1 = $_POST['peso1'];
                $n2 = $_POST['nota2']; $p2 = $_POST['peso2'];
                $n3 = $_POST['nota3']; $p3 = $_POST['peso3'];
                $resultado = (($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3)) / ($p1 + $p2 + $p3);
            }
        ?>
    </form>

    <?php
        if(isset($_POST['nota1']) && isset($_POST['peso1'])){
            echo "<br>A média ponderada é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
