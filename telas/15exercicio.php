<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Velocidade Média</title>
</head>
<body>
    <form method="POST">
        <label for="distancia">Distância (km):</label>
        <input type="number" step="any" id="distancia" name="distancia" required />
        <br><br>
 
        <label for="tempo">Tempo (horas):</label>
        <input type="number" step="any" id="tempo" name="tempo" required />
        <br><br>
 
        <button type="submit">Calcular</button>
        <?php
            if(isset($_POST['distancia']) && isset($_POST['tempo'])){
                $dist = $_POST['distancia'];
                $tempo = $_POST['tempo'];
                $resultado = $dist / $tempo;
            }
        ?>
    </form>
 
    <?php
        if(isset($_POST['distancia']) && isset($_POST['tempo'])){
            echo "<br>A velocidade média é: ".$resultado." km/h";
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>