<?php

$host = "mysql";
$dbname = "hola_mundo";
$username = "root";
$password = "root";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>Aplicación PHP ejecutándose correctamente.</p>";
    echo "<p>Conexión a MySQL: <strong>EXITOSA</strong></p>";

} catch (PDOException $e) {

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>Error al conectar con MySQL:</p>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>