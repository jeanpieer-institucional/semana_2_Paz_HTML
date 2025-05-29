<!DOCTYPE html>
<html>
<head>
    <title>Serie Alternante</title>
</head>
<body>
    <h2>Generador de serie y suma</h2>
    <form method="post" action="">
        <label for="numero">Ingrese el número de términos (n):</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit">Generar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["numero"];
        $serie = [];
        $suma = 0;
        $termino = 1; // Primer término de la serie
        $sumarDos = true; // Bandera para alternar entre sumar 2 o 1

        // Generar la serie y calcular la suma
        for ($i = 1; $i <= $n; $i++) {
            $serie[] = $termino;
            $suma += $termino;
            
            // Alternar entre sumar 2 o 1 para el siguiente término
            if ($sumarDos) {
                $termino += 2;
            } else {
                $termino += 1;
            }
            $sumarDos = !$sumarDos; // Cambiar la bandera
        }

        // Mostrar resultados
        echo "<h3>Resultados para n = $n</h3>";
        echo "SERIE = " . implode(" , ", $serie);
        if ($n > 0) {
            echo " , . . .";
        }
        echo "<br>SUMA = " . $suma;
    }
    ?>
</body>
</html>