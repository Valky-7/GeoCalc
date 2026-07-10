<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Geométrica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>GeoCalc</h1>
</header>

<div class="container">

    <h1>GeoCalc</h1>

    <p class="descricao">
        Plataforma para cálculo de áreas e volumes utilizando PHP.
        Escolha uma figura abaixo para iniciar.
    </p>

    <div class="menu">

        <a href="quadrado.php" class="card">
            <h2>Área do Quadrado</h2>
            <p>A = l²</p>
        </a>

        <a href="retangulo.php" class="card">
            <h2>Área do Retângulo</h2>
            <p>A = b × h</p>
        </a>

        <a href="triangulo.php" class="card">
            <h2>Área do Triângulo</h2>
            <p>A = (b × h) / 2</p>
        </a>

        <a href="circulo.php" class="card">
            <h2>Área do Círculo</h2>
            <p>A = π × r²</p>
        </a>

        <a href="trapezio.php" class="card">
            <h2>Área do Trapézio</h2>
            <p>A = ((B + b) × h) / 2 </p>
        </a>

        <a href="cubo.php" class="card">
            <h2>Volume do Cubo</h2>
            <p>V = a³</p>
        </a>

        <a href="paralelepipedo.php" class="card">
            <h2>Volume do Paralelepípedo (Bloco Retangular)</h2>
            <p>V = c × l × h</p>
        </a>

        <a href="cilindro.php" class="card">
            <h2>Volume do Cilindro</h2>
            <p>V = π × r² × h</p>
        </a>

        <a href="cone.php" class="card">
            <h2>Volume do Cone</h2>
            <p>V = (π × r² × h) / 3</p>
        </a>

        <a href="esfera.php" class="card">
            <h2>Volume da Esfera</h2>
            <p>V = (4/3) × π × r³</p>
        </a>

    </div>

</div>

<footer>
    <nav>
        <a href="index.php">Anterior</a>
        <a href="index.php">Menu Principal</a>
        <a href="quadrado.php">Próximo</a>
    </nav>
</footer>

</body>
</html>