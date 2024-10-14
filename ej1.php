<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        if ($SERVER["REQUEST_METHOD"] == "POST"){
$ancho = $_POST["ancho"];
$largo = $_POST["largo"];
$alto = $_POST["alto"];
$peso = $_POST["peso"];
$num_Paquete = $_POST["paquete"];
$zona = $_POST["zona"];
$tipo_Transporte = $_POST["transporte"];
$tamano = $ancho * $largo * $alto
$precio = ($tamano <= 0.5 ? 50 * $tamano) : ($tamano <= 1 ? 75 * $tamano : 100 * $tamano);
        }

if ($peso > 15) {
echo "No se puede enviar el paquete debido al peso"
} else{
    $preciofinal = $peso > 10 ? $precio * 1,5 : ($peso > 5 ? $precio * 1,25 : $precio);
if ($zona == "baleares" $tipo_Transporte == "aereo") {
    $preciofinal *= 1,1;
    elseif ($zona == "baleares") {
        $preciofinal *= 1,1;
}
$precio_total = $preciofinal * $num_Paquete;
 echo "El precio total es: " .
}
        

}   
    ?>
    
    <form method="POST" action="">
        <label for="ancho">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">
        <label for="largo">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">
        <label for="alto">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="num_Paquete">PAQUETE:</label>
        <input type="number" id="paquete" name="paquete" value="">
        <label for="zona">ZONA:</label>
        <select name= "zona">
        <option value="peninsula">
        <option value="baleares">
        <option value="canarias">
        <label for="transporte">TRANSPORTE:</label>
        <option value="maritimo">
        <option value="aereo">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>