<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gasto de Energia Elétrica</title>
</head>
<body>
    <form method="POST">
        <label for="potencia">Potência do aparelho (Watts):</label>
        <input type="number" step="any" id="potencia" name="potencia" required />
        <br><br>

        <label for="tempo">Tempo de uso (Horas):</label>
        <input type="number" step="any" id="tempo" name="tempo" required />
        <br><br>

        <button type="submit">Calcular Consumo</button>
        <?php
            if(isset($_POST['potencia']) && isset($_POST['tempo'])){
                $potencia = $_POST['potencia'];
                $tempo = $_POST['tempo'];
                $resultado = ($potencia * $tempo) / 1000; // Resultado em kWh
            }
        ?>
    </form>

    <?php
        if(isset($_POST['potencia']) && isset($_POST['tempo'])){
            echo "<br>O gasto de energia é: ".$resultado." kWh";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
