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

        <h2>GeoCalc - Área do quadrado</h2>
        <p><strong>Descrição:</strong> A área do quadrado é calculada multiplicando a medida de um lado por ele mesmo. </p>
        <p><strong>Fórmula:</strong> A = Lado² (A = l²)</p>

        <form action="" method="POST">
            <label for = "lado">Digite a medida do lado (cm): </label>
            <input type = "number" step="0.01" name="lado" id="lado" required>
            <button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $lado = $_POST['lado'];

            if ($lado > 0 ) {
                $area = pow($lado, 2);
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um quadrado com lado de <strong>{$lado} cm:</strong></br>";
                echo "A área total é de <strong>" . number_format($area, 2, ',', '.') . "cm²</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <a href="index.php" class="voltar">
        Voltar ao Menu
    </a>

    <footer>
        <nav>
            <a href="index.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="retangulo.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>