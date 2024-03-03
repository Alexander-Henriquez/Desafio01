<?php
session_start(); // Iniciar la sesión para acceder a la matriz asociativa entre solicitudes

// Eliminar registro si se proporciona un parámetro en la URL
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];

    if (isset($_SESSION['registros'][$idEliminar])) {
        unset($_SESSION['registros'][$idEliminar]);
    }
}

// Mostrar registros almacenados en la matriz asociativa
if (isset($_SESSION['registros']) && !empty($_SESSION['registros'])) {
    echo '<table border="1">';
    echo '<tr><th>Nombre</th><th>ASN</th><th>DPS</th><th>DSS</th><th>DWF</th><th>SPP</th><th>Promedio (Maximo 4.5)</th><th>Simbolo</th><th>Eliminar</th></tr>';
    
    foreach ($_SESSION['registros'] as $id => $registro) {
        echo "<tr><td>{$registro['nombre']}</td><td>{$registro['nota1']}</td><td>{$registro['nota2']}</td><td>{$registro['nota3']}</td><td>{$registro['nota4']}</td><td>{$registro['nota5']}</td> <td>{$registro['prom']}</td> <td>{$registro['simboloProm']}</td><td><a href='index.php?eliminar=$id'>Eliminar</a></td></tr>";
    }

    echo '</table>';
} else {
    echo 'No hay registros almacenados.';
}
?>
