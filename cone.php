    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculos Geométricos</title>
        <!-- <link rel ="stylesheet" href="style.css"> !--> .
    </head>
    <body>
        <h2>GeoCalc - Volume do Cone</h2>
        <p><strong>Descrição:</strong> Um terço do volume de um cilindro com as mesmas dimensões.</p>
        <p><strong>Fórmula:</strong> V = (π × r² × h) / 3</p>

        <form action="" method="POST">
            <label for = "raio">Digite o raio do cone (cm): </label>
            <input type = "number" step="0.01" name="raio" id ="raio" required>  

            <br><br><label for = "altura">Digite a altura do cone (cm): </label>
            <input type = "number" step="0.01" name="altura" id ="altura" required> 

            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
            $altura = $_POST['altura'];
            
            if ($raio > 0 and $altura > 0) { 
                $pi = M_PI;
                $c1 = $pi * pow($raio, 2) * $altura;
                $volume = $c1 / 3;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um cone com o raio de <strong>{$raio}cm²</strong> e altura de <strong>{$altura}cm</strong> é de:</br>";
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