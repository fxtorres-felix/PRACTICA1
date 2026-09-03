<?php $usuario = $_POST['usuario']; 
$genero = $_POST['genero']; 
$correo = $_POST['correo'];
 $telefono = $_POST['telefono'];
echo "<h1>DATOS RECIBIDOS</h1>";
 echo "<p><strong>Nombre del usuario:</strong> " . htmlspecialchars($usuario) . "</p>";
 echo "<p><strong>Género:</strong> " . htmlspecialchars($genero) . "</p>"; echo "<p><strong>Correo:</strong> " . htmlspecialchars($correo) . "</p>"; 
echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($telefono) . "</p>"; ?>