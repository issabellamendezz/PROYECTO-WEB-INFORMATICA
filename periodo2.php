<?php
$taller = isset($_GET['taller']) ? intval($_GET['taller']) : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodo 2 - Programas PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .contenedor-taller {
            margin-top: 2rem;
            padding: 1.5rem;
            border: 2px dashed #34495e;
            border-radius: 10px;
            background: white;
            text-align: center;
        }
        .formulario-php {
            margin-bottom: 1.5rem;
        }
        .formulario-php input[type="number"] {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0.5rem;
            width: 120px;
        }
        .btn-submit {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #27ae60;
        }
        .resultado-box {
            background-color: #f8f9fa;
            border-left: 5px solid #3498db;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 3px;
            display: inline-block;
            text-align: left;
            min-width: 250px;
        }
        .numeros-ciclo {
            letter-spacing: 2px;
            word-wrap: break-word;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <header>
        <h1>Periodo 2: PHP</h1>
        <p>Selecciona un taller para ejecutarlo en tiempo real</p>
    </header>

    <main>
        <section class="menu-periodos">
            <a href="periodo2.php?taller=1" class="btn">1. Hola Mundo</a>
            <a href="periodo2.php?taller=2" class="btn">2. 4 Operaciones Básicas</a>
            <a href="periodo2.php?taller=3" class="btn">3. Positivo, Negativo o Cero</a>
            <a href="periodo2.php?taller=4" class="btn">4. División Validada</a>
            <a href="periodo2.php?taller=5" class="btn">5. Ciclo 0 al 100</a>
            <a href="periodo2.php?taller=6" class="btn">6. Ciclo 100 al 0</a>
            <a href="periodo2.php?taller=7" class="btn">7. Menor, Mayor o Igual</a>
            <a href="periodo2.php?taller=8" class="btn">8. Ciclo 1 hasta N</a>
        </section>

        <section class="contenedor-taller">
            <?php
            switch ($taller) {
                case 1:
                    echo "<h3>Taller 1: Introducción (Hola Mundo)</h3>";
                    echo "<div class='resultado-box'><strong>Resultado:</strong><br>¡Hola Mundo desde PHP! 👋</div>";
                    break;

                case 2:
                    echo "<h3>Taller 2: Operaciones Básicas</h3>";
                    ?>
                    <form class="formulario-php" method="POST" action="periodo2.php?taller=2">
                        <input type="number" name="num1" placeholder="Número 1" required step="any">
                        <input type="number" name="num2" placeholder="Número 2" required step="any">
                        <button type="submit" class="btn-submit">Calcular</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['num1']) && isset($_POST['num2'])) {
                        $n1 = $_POST['num1'];
                        $n2 = $_POST['num2'];
                        echo "<div class='resultado-box'>";
                        echo "<strong>Resultados:</strong><br>";
                        echo "Suma: " . ($n1 + $n2) . "<br>";
                        echo "Resta: " . ($n1 - $n2) . "<br>";
                        echo "Multiplicación: " . ($n1 * $n2) . "<br>";
                        if ($n2 != 0) {
                            echo "División: " . ($n1 / $n2) . "<br>";
                        } else {
                            echo "División: No se puede dividir entre cero.<br>";
                        }
                        echo "</div>";
                    }
                    break;

                case 3:
                    echo "<h3>Taller 3: Condicionales (Positivo, Negativo o Cero)</h3>";
                    ?>
                    <form class="formulario-php" method="POST" action="periodo2.php?taller=3">
                        <input type="number" name="numero_evaluar" placeholder="Ingresa un número" required step="any">
                        <button type="submit" class="btn-submit">Evaluar</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero_evaluar'])) {
                        $num = $_POST['numero_evaluar'];
                        echo "<div class='resultado-box'><strong>Resultado:</strong><br>";
                        if ($num > 0) {
                            echo "El número $num es <strong>Positivo</strong>.";
                        } elseif ($num < 0) {
                            echo "El número $num es <strong>Negativo</strong>.";
                        } else {
                            echo "El número ingresado es <strong>Cero (0)</strong>.";
                        }
                        echo "</div>";
                    }
                    break;

                case 4:
                    echo "<h3>Taller 4: Condicionales (División Validada)</h3>";
                    ?>
                    <form class="formulario-php" method="POST" action="periodo2.php?taller=4">
                        <input type="number" name="numerador" placeholder="Numerador" required step="any">
                        <input type="number" name="denominador" placeholder="Denominador" required step="any">
                        <button type="submit" class="btn-submit">Dividir</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numerador']) && isset($_POST['denominador'])) {
                        $num = $_POST['numerador'];
                        $den = $_POST['denominador'];
                        echo "<div class='resultado-box'><strong>Resultado:</strong><br>";
                        if ($den != 0) {
                            $resultado = $num / $den;
                            echo "La división de $num / $den es igual a: <strong>$resultado</strong>";
                        } else {
                            echo "<span style='color: #e74c3c;'><strong>Error:</strong> El denominador es cero. No se puede realizar la operación.</span>";
                        }
                        echo "</div>";
                    }
                    break;

                case 5:
                    echo "<h3>Taller 5: Ciclos (Mostrar del 0 al 100)</h3>";
                    echo "<div class='resultado-box numeros-ciclo'><strong>Números generados:</strong><br>";
                    for ($i = 0; $i <= 100; $i++) {
                        echo $i . ($i < 100 ? " - " : "");
                    }
                    echo "</div>";
                    break;

                case 6:
                    echo "<h3>Taller 6: Ciclos (Mostrar del 100 al 0)</h3>";
                    echo "<div class='resultado-box numeros-ciclo'><strong>Números generados:</strong><br>";
                    for ($i = 100; $i >= 0; $i--) {
                        echo $i . ($i > 0 ? " - " : "");
                    }
                    echo "</div>";
                    break;

                case 7:
                    echo "<h3>Taller 7: Formularios (Menor, Mayor o Igual)</h3>";
                    ?>
                    <form class="formulario-php" method="POST" action="periodo2.php?taller=7">
                        <input type="number" name="f_num1" placeholder="Número A" required step="any">
                        <input type="number" name="f_num2" placeholder="Número B" required step="any">
                        <button type="submit" class="btn-submit">Comparar</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['f_num1']) && isset($_POST['f_num2'])) {
                        $a = $_POST['f_num1'];
                        $b = $_POST['f_num2'];
                        echo "<div class='resultado-box'><strong>Resultado:</strong><br>";
                        if ($a > $b) {
                            echo "El número mayor es <strong>$a</strong> y el menor es <strong>$b</strong>.";
                        } elseif ($b > $a) {
                            echo "El número mayor es <strong>$b</strong> y el menor es <strong>$a</strong>.";
                        } else {
                            echo "Ambos números son <strong>iguales</strong> ($a = $b).";
                        }
                        echo "</div>";
                    }
                    break;

                case 8:
                    echo "<h3>Taller 8: Formularios (Ciclo 1 hasta N)</h3>";
                    ?>
                    <form class="formulario-php" method="POST" action="periodo2.php?taller=8">
                        <input type="number" name="limite_n" placeholder="Número Positivo (N)" required min="1">
                        <button type="submit" class="btn-submit">Generar Ciclo</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['limite_n'])) {
                        $n = intval($_POST['limite_n']);
                        echo "<div class='resultado-box numeros-ciclo'><strong>Conteo desde 1 hasta $n:</strong><br>";
                        if ($n > 0) {
                            for ($i = 1; $i <= $n; $i++) {
                                echo $i . ($i < $n ? " - " : "");
                            }
                        } else {
                            echo "<span style='color: #e74c3c;'>Por favor ingresa un número positivo mayor a 0.</span>";
                        }
                        echo "</div>";
                    }
                    break;

                default:
                    echo "<h3>Selecciona un taller del Periodo 2</h3>";
                    echo "<p>Haz clic en cualquiera de los botones de arriba para ver su funcionamiento e interactuar con el código PHP.</p>";
                    break;
            }
            ?>
        </section>

        <nav class="menu-periodos" style="margin-top: 3rem;">
            <a href="periodo2.php" class="btn" style="background-color: #34495e;">Menú del Periodo</a>
            <a href="index.php" class="btn" style="background-color: #34495e;">Menú Principal</a>
        </nav>
    </main>

    <footer>
        <p>&copy; 2026 - Proyecto de informática</p>
    </footer>
</body>
</html>