<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Rendimento da Conta</title>
</head>
<body>
    <form method="POST">
        <label for="saldo">Saldo atual (R$):</label>
        <input type="number" step="any" id="saldo" name="saldo" required />
        <br><br>

        <button type="submit">Calcular Rendimento (5%)</button>
        <?php
            if(isset($_POST['saldo'])){
                $saldo = $_POST['saldo'];
                $taxaFixa = 0.05; // Taxa fixa de 5%
                $novoSaldo = $saldo + ($saldo * $taxaFixa);
                $resultado = number_format($novoSaldo, 2, ',', '.');
            }
        ?>
    </form>

    <?php
        if(isset($_POST['saldo'])){
            echo "<br>O saldo com rendimento de 5% é: R$ ".$resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
