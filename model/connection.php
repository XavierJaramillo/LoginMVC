<?php

include "config.php";

//CONECTAMOS A LA BD
try {
    $dsn = "mysql:host=" . SERVIDOR . ";dbname=" . BD;
    $pdo = new PDO($dsn, USUARIO, PASSWORD);
    echo "<script>alert('Conexión establecida!');</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}

// //ESTILOS POR PROCEDIMIENTOS
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "bd_login";

// //CREAR LA CONEXIÓN
// $conn = mysqli_connect($host, $user, $pass, $db);

// //CHECKEAR LA CONEXIÓN
// if(!$conn) {
//     echo "Error: No se pudo conectar a la bd." . PHP_EOL;
//     echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
//     exit;
// } else {
//     mysqli_set_charset($conn, "utf8");
// }

?>
