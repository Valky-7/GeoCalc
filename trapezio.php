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

        <h2>GeoCalc - Área do Trapézio</h2>
        <p><strong>Descrição:</strong> A soma das bases multiplicada pela altura, dividida por dois.</p>
        <p><strong>Fórmula:</strong> A = ((B + b) × h) / 2 </p>

        <form action="" method="POST">
            <label for = "basema">Digite a base maior do trapézio (cm):  </label>
            <input type = "number" step="0.01" name="basema" id ="basema" required>  

            <br><br><label for = "baseme">Digite a base menor trapézio (cm):  </label>
            <input type = "number" step="0.01" name="baseme" id ="baseme" required>  

            <br><br><label for = "altura">Digite a altura do trapézio (cm):  </label>
            <input type = "number" step="0.01" name="altura" id ="altura" required>  
            
            
            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $basema = $_POST['basema'];
            $baseme = $_POST['baseme'];
            $altura = $_POST['altura'];
            
            if ($basema || $baseme || $altura > 0 ) { 
                $c1 = $basema + $baseme;
                $c2 = $c1 * $altura;
                $c3 = $c2 / 2;
                $area = $c3;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um círculo com a base maior de <strong>{$basema}cm</strong>, base menor de <strong>{$baseme}cm</strong> e altura de <strong>{$altura}cm:</br>";
                echo "A área total é de <strong>" . number_format($area, 2, ',') . "cm²</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <footer>
        <nav>
            <a href="circulo.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="cubo.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>