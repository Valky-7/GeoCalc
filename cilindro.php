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

        <h2>GeoCalc - Volume do Cilindro</h2>
        <p><strong>Descrição:</strong> A área da base circular multiplicada pela altura do cilindro.</p>
        <p><strong>Fórmula:</strong> V = π × r² × h</p>

        <form action="" method="POST">
             <label for = "raio">Digite o raio do cilindro (cm):  </label>
            <input type = "number" step="0.01" name="raio" id ="raio" required>  

            <br><br><label for = "altura">Digite a altura do cilindro (cm):  </label>
            <input type = "number" step="0.01" name="altura" id ="altura" required>  

            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
            $altura = $_POST['altura'];
            
            if ($raio > 0 and $altura > 0) { 
                $pi = M_PI;
                $volume = $pi * pow($raio, 2) * $altura;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um cilindro com raio de <strong>{$raio}cm²</strong>, e altura de <strong>{$altura}cm:</br>";
                echo "O volume é de <strong>" . number_format($volume, 2, ',') . "cm³</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <footer>
        <nav>
            <a href="paralelepipedo.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="cone.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>