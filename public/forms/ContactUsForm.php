<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']); // Limpia la entrada
    $email = htmlspecialchars($_POST['correo']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
}