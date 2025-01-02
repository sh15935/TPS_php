<?php
function Connect() {
    $env = parse_ini_file(__DIR__ . '/.env');
    return mysqli_connect($env['DB_HOST'], $env['DB_USER'], $env['DB_PASSWORD'], $env['DB_NAME']);
}
?>
