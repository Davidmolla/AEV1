<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
    if ($SERVER["REQUEST_METHOD"] == "POST")
    $numero = $_POST["num"]
        
    if ($numero <= 0) {
        echo "Introduce un num"
    } else {
        echo "Secuencia de collatz $numero"
    for ($n = $numero; $n != 1;) {
        echo $n . "->";
        if ($n % 2 == 0){
            $n /=2;
        } else {
            $n = $n * 3 + 1;
        }
    }

    }

    echo "se ha llegado a 1, por lo tanto se cumple"
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>