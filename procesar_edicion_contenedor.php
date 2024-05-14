<?php
// Verificar si se recibió el ID del registro a editar
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $empresa = $_POST['empresa'];
    $direccion= isset($_POST['direccion']) ? $_POST['direccion'] : null;
    $fecha = $_POST['fecha'];
    
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto_db";
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Consulta SQL para actualizar los datos del registro
    $sql = "UPDATE contenedores SET empresa='$empresa', direccion='$direccion', fecha='$fecha' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        // Si la actualización fue exitosa, redirigir a la página principal
        header("Location: contenedor.php");
        exit();
    } else {
        // Si ocurrió un error al actualizar los datos, mostrar un mensaje de error
        echo "Error al actualizar el contenedor: " . $conn->error;
    }
    
    // Cerrar conexión
    $conn->close();
} else {
    // Si no se recibió el ID del registro, mostrar un mensaje de error
    echo "ID de contenedor no proporcionado";
}
?>
