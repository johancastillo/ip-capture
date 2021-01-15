<?php
/**
 * Obtener y guardar la IP de un visitante en PHP
 *
 * @author parzibyte
 */
# Para obtener la fecha correcta hay que poner la zona horaria
date_default_timezone_set("America/Mexico_City");
$fechaYHora = date("Y-m-d H:i:s");
# Si no hay REMOTE_ADDR entonces ponemos "Desconocida"
$ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
# Formatear mensaje
$mensaje = sprintf("La IP %s accedió en %s%s", $ip, $fechaYHora, PHP_EOL);
# Y adjuntarlo o escribirlo en ips.txt
file_put_contents("ips.txt", $mensaje, FILE_APPEND);
# Ya registramos la ip, ahora seguimos con el flujo normal ;)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jc Johan</title>
</head>
<body>
    Hola mundo
</body>
</html>