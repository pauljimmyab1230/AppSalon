<?php

$db = mysqli_connect('localhost', 'root', '@pauljimmyAB1230', 'appsalon');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos appsalon es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

