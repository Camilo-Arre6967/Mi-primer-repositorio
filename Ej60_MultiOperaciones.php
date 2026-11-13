<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MultiOperaciones</title>
</head>
<body>
    <h2>CAPTURA DE DOS ARREGLOS DE TRES NÚMEROS</h2>
    <form method="POST" action="">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "Numero 1 (51 al 99):";
            echo "<input type='number' name='numeros1[]'>" . " ";

            echo "Numero 2 (-50 al -1):";
            echo "<input type='number' name='numeros2[]'>" . " ";
            echo "<br><br>";
        }
        ?>
        <button type="submit" name="guardar" value="guardar">
            Guardar y calcular
        </button>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        $numeros1 = $_POST['numeros1'];
        $numeros2 = $_POST['numeros2'];

        $suma = array();
        $resta = array();
        $multiplicacion = array();
        $division = array();

        for ($i = 0; $i < 3; $i++) {
            $suma[$i] = $numeros1[$i] + $numeros2[$i];
            $resta[$i] = $numeros1[$i] - $numeros2[$i];
            $multiplicacion[$i] = $numeros1[$i] * $numeros2[$i];
            $division[$i] = $numeros1[$i] / $numeros2[$i];
        }

        echo "<h3>ARREGLO NUMEROS 1</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo $numeros1[$i] . "<br>";
        }

        echo "<h3>ARREGLO NUMEROS 2</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo $numeros2[$i] . "<br>";
        }

        echo "<h3>ARREGLO DE SUMA</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo $suma[$i] . "<br>";
        }

        echo "<h3>ARREGLO DE RESTA</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo $resta[$i] . "<br>";
        }

        echo "<h3>ARREGLO DE MULTIPLICACIÓN</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo $multiplicacion[$i] . "<br>";
        }

        echo "<h3>ARREGLO DE DIVISIÓN</h3>";
        for ($i = 0; $i < 3; $i++) {
            echo number_format($division[$i], 2) . "<br>";
        }
    }
    ?>
</body>
</html>