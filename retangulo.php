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

        <h2>GeoCalc - Área do Retângulo</h2>
        <p><strong>Descrição:</strong> Produto da base pela altura. </p>
        <p><strong>Fórmula:</strong> A = b × h</p>

        <form action="" method="POST">
            <label for = "base">Digite a base (cm): </label>
            <input type = "number" step="0.01" name="base" id="base" required>

            <br><br><label for ="altura">Digite a altura (cm): </label>
            <input type = "number" step="0.01" name="altura" id="altura" required>
            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            if ($base || $altura > 0 ) {
                $area = $base * $altura;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um retângulo com base de <strong>{$base} cm e altura de <strong>{$altura} cm:</strong></br>";
                echo "A área total é de <strong>" . number_format($area) . "cm²</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <footer>
        <nav>
            <a href="quadrado.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="triangulo.php">Próximo</a>
        </nav>
    </footer>
    </body>
    </html>