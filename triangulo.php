    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculos Geométricos</title>
        <link rel ="stylesheet" href="style.css">
    </head>
    <body>
        
         <header>
            <h1>GeoCalc</h1>
        </header>

        <h2>GeoCalc - Área do Triângulo</h2>
        <p><strong>Descrição:</strong> Metade do produto da base pela altura. </p>
        <p><strong>Fórmula:</strong> A = (b × h) / 2 </p>

        <form action="" method="POST">
            <label for = "base">Digite a base do triângulo (cm): </label>
            <input type = "number" step="0.01" name="base" id="base" required>

            <br><br><label for = "altura">Digite a altura do triângulo (cm): </label>
            <input type = "number" step="0.01" name="altura" id ="altura" required>          
            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base']; 
            $altura = $_POST['altura'];

            if ($base || $altura > 0 ) {
                $area = $base * $altura;
                $area2 = $area / 2;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um triângulo com base de <strong>{$base} cm e altura de <strong>{$altura} cm:</strong></br>";
                echo "A área total é de <strong>" . number_format($area2, 2, ',') . "cm²</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <footer>
        <nav>
            <a href="retangulo.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="circulo.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>