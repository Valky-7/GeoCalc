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

        <h2>GeoCalc - Volume do Paralelepípedo</h2>
        <p><strong>Descrição:</strong> O produto das três dimensões do bloco.</p>
        <p><strong>Fórmula:</strong> V = c × l × h</p>

        <form action="" method="POST">
             <label for = "comprimento">Digite o comprimento do Paralelepípedo (cm):  </label>
            <input type = "number" step="0.01" name="comprimento" id ="comprimento" required>  

            <br><br><label for = "largura">Digite a largura do Paralelepípedo (cm):  </label>
            <input type = "number" step="0.01" name="largura" id ="largura" required>  

            <br><br><label for = "altura">Digite a altura do Paralelepípedo (cm):  </label>
            <input type = "number" step="0.01" name="altura" id ="altura" required>  

            <br><br><button type = "submit">Calcular</button>
        </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comprimento = $_POST['comprimento'];
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];
            
            if ($comprimento > 0 and $largura > 0 and $altura > 0) { 
                $volume = $comprimento * $largura * $altura;
                echo "<hr>";
                echo "<h3> Resultado: </h3>";
                echo "Para um paralelepípedo com comprimento de <strong>{$comprimento}cm</strong>, largura de <strong>{$largura}cm</strong> e altura de <strong>{$altura}cm:</br>";
                echo "O volume é de <strong>" . number_format($volume, 2, ',') . "cm³</strong>";

            } else {
                echo "<p style='color: red;'>Por favor, insira um número maior que zero! </p>";

            }
        }

    ?>

    <br>

    <footer>
        <nav>
            <a href="cubo.php">Anterior</a>
            <a href="index.php">Menu Principal</a>
            <a href="cilindro.php">Próximo</a>
        </nav>
    </footer>

    </body>
    </html>