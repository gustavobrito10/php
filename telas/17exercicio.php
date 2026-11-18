<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salário Mensal</title>
</head>
<body>
    <form method="POST">
        <label for="valorHora">Valor da Hora (R$):</label>
        <input type="number" step="any" id="valorHora" name="valorHora" required />
        <br><br>
 
        <label for="horas">Horas Trabalhadas:</label>
        <input type="number" step="any" id="horas" name="horas" required />
        <br><br>
 
        <button type="submit">Calcular Salário</button>
        <?php
            if(isset($_POST['valorHora']) && isset($_POST['horas'])){
                $valorHora = $_POST['valorHora'];
                $horas = $_POST['horas'];
                $resultado = number_format($valorHora * $horas, 2, ',', '.');
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['valorHora']) && isset($_POST['horas'])){
            echo "<br>O salário mensal é: R$ ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>