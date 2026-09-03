<?php
// Ignacio 
$host = 'localhost';
$dbname = 'tu_base_de_datos';
$username = 'root';
$password = '';

try {
    // Conexión a la base de datos con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si se enviaron los datos por POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);

        // Consulta preparada para evitar inyecciones SQL
        $sql = "INSERT INTO alumnos (nombre, apellido, email) VALUES (:nombre, :apellido, :email)";
        $stmt = $conexion->prepare($sql);

        // Ejecutar la inserción pasando los valores
        $stmt->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':email' => $email
        ]);

        echo "¡Alumno guardado correctamente!";
    }
} catch (PDOException $e) {
    echo "Error de conexión o consulta: " . $e->getMessage();
}
?>
