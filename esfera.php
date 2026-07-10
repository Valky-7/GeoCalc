    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculos Geométricos</title>
        <!-- <link rel ="stylesheet" href="style.css"> !--> .
    </head>
    <body>
        <h2>GeoCalc - Volume da Esfera</h2>
        <p><strong>Descrição:</strong> Quatro terços de Pi multiplicando pelo raio do seu cubo.</p>
        <p><strong>Fórmula:</strong> V = (4/3) × π × r³</p>

        <form action="" method="POST">
            <label for = "raio">Digite o raio da esfera (cm): </label>
            <input type = "number" step="0.01" name="raio" id ="raio" required>  

            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
;
            
            if ($raio > 0) { 
                $pi = M_PI;
                $c1 = 4 / 3;
                $volume = $c1 * $pi * pow($raio, 3);
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para uma esfera com o raio de <strong>{$raio}cm²:</strong></br>";
                echo "O volume é de <strong>" . number_format($volume, 2, ',') . "cm³</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <a href="index.php" class="voltar">
        Voltar ao Menu
    </a>


    </body>
    </html>