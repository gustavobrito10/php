<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Hipotenusa</title>
</head>
<body>
    <form method="POST">
        <label for="catetoA">Cateto A:</label>
        <input type="number" step="any" id="catetoA" name="catetoA" required />
        <br><br>

        <label for="catetoB">Cateto B:</label>
        <input type="number" step="any" id="catetoB" name="catetoB" required />
        <br><br>

        <button type="submit">Calcular Hipotenusa</button>
        <?php
            if(isset($_POST['catetoA']) && isset($_POST['catetoB'])){
                $a = $_POST['catetoA'];
                $b = $_POST['catetoB'];
                $resultado = hypot($a, $b);
            }
        ?>
    </form>

    <?php
        if(isset($_POST['catetoA']) && isset($_POST['catetoB'])){
            echo "<br>A hipotenusa é: ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
