<?php
session_start(); // Inicia la sesión si no está iniciada

// Verificar si se ha enviado el formulario de registro de empresa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado todos los campos necesarios
    if (isset($_POST['empresa']) && isset($_POST['direccion']) && isset($_POST['fecha'])) {
        // Capturar los valores del formulario
        $empresa = $_POST['empresa'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];

        // Conexión a la base de datos
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "proyecto_db";

        // Crear conexión
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta SQL
        $sql = "INSERT INTO contenedores (empresa, direccion, fecha ) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $empresa, $direccion, $fecha);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Registro de empresa exitoso, almacenar mensaje en sesión
            $_SESSION['success_message'] = "Registro de contenedor exitoso";
            // Cerrar conexión
            $conn->close();
            // Redirigir a una página de éxito
            header("Location: contenedor.php");
            exit();
        } else {
            // Error al registrar la empresa, almacenar mensaje en sesión
            $_SESSION['error_message'] = "Error al registrar el contenedor: " . $stmt->error;
            // Cerrar conexión
            $conn->close();
            // Redirigir a una página de error
            header("Location: contenedor.php");
            exit();
        }
    } else {
        // Redirigir si no se enviaron todos los campos necesarios
        header("Location: contenedor.php");
        exit();
    }
} else {
    // Redirigir si no se ha enviado el formulario de registro de empresa
    header("Location: contenedor.php");
    exit();
}
?>
