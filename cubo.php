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

        <h2>GeoCalc - Volume do Cubo</h2>
        <p><strong>Descrição:</strong> A aresta elevada ao cubo.</p>
        <p><strong>Fórmula:</strong> V = a³</p>

        <form action="" method="POST">
            <label for = "arestra">Digite a arestra do cubo: </label>
            <input type = "number" step="0.01" name="arestra" id ="arestra" required>            
            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arestra = $_POST['arestra'];
            
            if ($arestra > 0) { 
                $volume = pow($arestra, 3);
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um cubo com a arestra de <strong>{$arestra}</strong>:</br>";
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

    <footer>
        <nav>
            <a href="trapezio.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="paralelepipedo.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>