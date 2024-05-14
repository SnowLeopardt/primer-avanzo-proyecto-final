<?php
session_start(); // Inicia la sesión si no está iniciada
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empresa</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Agregamos la librería Font Awesome para los iconos -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #007bff, #28a745);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .registro-container {
            background-color: #6eaadb;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 90px;
            margin-right: 60px; /* Espacio entre el formulario y la tabla */
            width: 400px;
        }
        .registro-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .registro-container input[type="text"],
        .registro-container input[type="url"],
        .registro-container input[type="tel"],
        .registro-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #000;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .registro-container button {
            width: 48%;
            padding: 10px;
            background-color: #88dc55;
            border: 1px solid #000;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }
        .registro-container button.cancelar {
            background-color: #dc3545;
        }
        .registro-container button:hover {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>


    <div class="registro-container">
        <h2>Registro de Empresa</h2>
        <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .tabla-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 0 auto 50px auto; /* Mueve la tabla hacia abajo 50px y la centra horizontalmente */
            overflow-x: auto;
            margin-top: -80px; /* Ajusta la posición de la tabla hacia arriba */
        }

        .tabla-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            white-space: nowrap;
        }

        th {
            background-color: #6eaadb;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td:last-child {
            text-align: center;
        }

        .btn-container {
            display: flex;
        }

        .editar-btn, .eliminar-btn {
            padding: 6px 10px;
            margin-right: 5px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }

        .eliminar-btn {
            background-color: #dc3545;
        }

        .search-container {
            margin-bottom: 15px;
            position: relative;
        }

        .search-container input[type="text"] {
            width: calc(100% - 30px); /* Considerando el espacio del icono */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #665e5e;
            border-radius: 3px;
            box-sizing: border-box;
            padding-left: 30px; /* Espacio para el icono */
        }

        .search-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            margin-top: -10px;
            margin-left: 10px; /* Ajusta el margen izquierdo para mover el icono hacia la derecha */
        }

    </style>

    
<header class="header" >
    <div class="container">
        <div class="btn-menu" style="position: absolute; top: -30px; left: 10px;">
            <label for="btn-menu">☰</label>
        </div>
    </div>
</header>

    
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="admin.php">TechnologyEco</a>
                <br><br><br><br>
                <a href="contenedor.php"><i class="fas fa-box"></i> Contenedores</a>
                <a href="campaña.php"><i class="fas fa-flag"></i> Campañas</a>
                <a href="empresa.php"><i class="fas fa-building"></i> Empresas</a>
                <a href="#"><i class="fas fa-comments"></i> Chat en línea</a>
                <a href="index.html"><i class="fas fa-door-closed "></i> Cerrar Sesión</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>




        <form action="procesar_registro_empresa.php" method="post">
            <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" required>
            <input type="url" name="sitio_web" placeholder="Sitio Web">
            <input type="text" name="direccion" placeholder="Dirección" required>
            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <textarea name="info_contacto" rows="4" placeholder="Información de Contacto"></textarea>
            <div>
                <button type="submit">Registrar</button>
                <button type="button" class="cancelar" onclick="window.location.href='admin.php'">Cancelar</button>
            </div>
        </form>
    </div>


    

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Campaña</title>
</head>

<body>
    <div class="tabla-container">
        <h2>Registros</h2>
        <div class="search-container">
            <i class="fas fa-search search-icon"></i> <!-- Icono de lupa -->
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Buscar">
        </div>
        <table>
            <tr>
                <th>Nombre de la Empresa</th>
                <th>Sitio Web</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Contacto</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Cambia el índice según el número de columna que quieras buscar
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }
    </script>



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
            $sql = "SELECT id, nombre_empresa, sitio_web, direccion, telefono, info_contacto FROM empresas";
            $result = $conn->query($sql);

            // Comprobar si hay resultados
            if ($result->num_rows > 0) {
                // Si hay resultados, mostrarlos en la tabla
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nombre_empresa"] . "</td>";
                    echo "<td>" . $row["sitio_web"] . "</td>";
                    echo "<td>" . $row["direccion"] . "</td>";
                    echo "<td>" . $row["telefono"] . "</td>";
                    echo "<td>" . $row["info_contacto"] . "</td>";
                    echo "<td>";
                    echo "<button class='editar-btn' onclick='editarRegistro(" . $row['id'] . ")'>Editar</button>";
                    echo "<button class='eliminar-btn' onclick='eliminarRegistro(" . $row['id'] . ")'>Eliminar</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                // Si no hay resultados, mostrar un mensaje
                echo "<tr><td colspan='7'>No se encuentran empresas registradas.</td></tr>";
            }

            // Cerrar conexión
            $conn->close();
            ?>
        </tbody>
        </table>
    </div>
    <script>
    // Función para eliminar un registro
    function eliminarRegistro(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
            // Realizar solicitud AJAX al servidor
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "eliminar_registro_empresa.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Recargar la página después de eliminar el registro
                    window.location.reload();
                }
            };
            xhr.send("id=" + id);
        }
    }
</script>
<script>
    // Función para abrir el formulario de edición
    function editarRegistro(id) {
        // Redirigir a una página de edición pasando el ID del registro como parámetro de la URL
        window.location.href = "editar_registro_empresa.php?id=" + id;
    }
</script>



</body>
</html>
