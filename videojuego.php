<?php
header('Content-Type: application/json');

$videojuego = array(
    "titulo" => "The Legend of Zelda: Breath of the Wild",
    "plataforma" => "Nintendo Switch",
    "añoLanzamiento" => 2017
);

echo json_encode($videojuego);
?>
<?php 