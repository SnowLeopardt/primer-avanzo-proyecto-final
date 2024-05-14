<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Campañas</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

          body {
           background: linear-gradient(to right, #007bff,#88dc58); /* Cambia los valores de los colores según lo necesites */
             }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 100px;
        padding: 50px;
    }

    .campania-table {
        width: 100%;
        background-color: #f4f4f4;
        border-collapse: collapse;
    }

    .campania-table th,
    .campania-table td {
        border: 1px solid #ccc;
        border-color: black;

        padding: 8px;
        text-align: left;
    }

    .campania-table th {
        background-color: #6eaadb;
    }

    .login-container button:hover {
        background-color: #0056b3;
    }

    button {
        padding: 10px 20px;
        background-color: #88dc55;
        border: none;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }

    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div> 
        </div>
    </header>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="index.html">TechnologyEco</a>
                <br><br>
                <br><br>
                <a href="vistaconte.php"><i class="fas fa-box"></i> Contenedores</a>
                <a href="vistacampa.php"><i class="fas fa-flag"></i> Campañas</a>
                <a href="vistaempre.php"><i class="fas fa-building"></i> Empresas</a>
                <a href="#"><i class="fas fa-comments"></i> Chat en línea</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>





<body>
    <h2>Listado de Campañas</h2>
    <table class="campania-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>dirección</th>
                <th>Fecha de Inicio</th>
                <th>Fecha Final</th>
                <th>Empresa</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
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

// Query para obtener las campañas
$sql = "SELECT nombre_empresa, direccion, fecha_inicio, fecha_final, nombre_empresa, descripcion FROM campanas";
$result = $conn->query($sql);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Si hay resultados, mostrarlos en la tabla
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre_empresa"] . "</td>";
        echo "<td>" . $row["direccion"] . "</td>";
        echo "<td>" . $row["fecha_inicio"] . "</td>";
        echo "<td>" . $row["fecha_final"] . "</td>";
        echo "<td>" . $row["nombre_empresa"] . "</td>";
        echo "<td>" . $row["descripcion"] . "</td>";
        echo "</tr>";
    }
} else {
    // Si no hay resultados, mostrar un mensaje
    echo "<tr><td colspan='5'>No se encontraron campañas.</td></tr>";
}

// Cerrar conexión
$conn->close();
?>

        </tbody>
    </table>
    <button onclick="window.location.href='index.html'">Regresar al Inicio</button>
</body>

</html>