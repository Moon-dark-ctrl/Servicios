<?php
$respuesta = strtolower(trim($_POST["respuesta"]));

echo "<h2>Resultado</h2>";

if ($respuesta == "pera") {
    echo "¡Correcto! 🎉 Es una pera.";
} else {
    echo "No es correcto. 😅 Intenta de nuevo.";
}
?>
