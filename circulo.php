    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculos Geométricos</title>
         <link rel ="stylesheet" href="style.css"> 
    </head>
    <body>
        <h2>GeoCalc - Área do Círculo</h2>
        <p><strong>Descrição:</strong> O valor de Pi multiplicado pelo quadrado do raio.</p>
        <p><strong>Fórmula:</strong> A = π × r² </p>

        <form action="" method="POST">
            <label for = "raio">Digite o raio do círculo (cm):  </label>
            <input type = "number" step="0.01" name="raio" id ="raio" required>          
            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $raio = $_POST['raio'];
            
            if ($raio > 0 ) {
                $pi = M_PI;
                $raio1 = pow($raio, 2);
                $area = pi() * $raio1;  
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um círculo com raio de <strong>{$raio}cm²:</strong></br>";
                echo "A área total é de <strong>" . number_format($area, 2, ',') . "cm²</strong>";

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