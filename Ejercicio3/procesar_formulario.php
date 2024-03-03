<?php
session_start(); // Iniciar la sesión para mantener la matriz asociativa entre solicitudes

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];
    $nota5 = $_POST["nota5"];

    // Convertir las notas a la escala de 4.5 GPA
    $gpa_4_5 = [
        10 => 4.5,
        9 => 4,
        8 => 3.5,
        7 => 3,
        6 => 2.5,
        5 => 2,
        4 => 1.5,
        3 => 1,
        2 => 0.5,
        1 => 0,
        0 => 0,
    ];

    $gpaLetter = [
        4.5 => 'A',
        3.5 => 'B',
        2.5 => 'C',
        1.5 => 'D',
        0 => 'F',
    ];

    // Calcular el promedio ponderado con la escala de GPA
    $promedio_gpa = ($gpa_4_5[$nota1] + $gpa_4_5[$nota2] + $gpa_4_5[$nota3] + $gpa_4_5[$nota4] + $gpa_4_5[$nota5]) / 5;
    $simboloProm = ($gpaLetter[$promedio_gpa]);

    // Verificar si el nombre ya existe en la sesión (sin contar espacios)
    if (!isset($_SESSION['registros'])) {
        $_SESSION['registros'] = [];
    }

    $nombreSinEspacios = str_replace(' ', '', $nombre);
    $nombreExistente = false;

    foreach ($_SESSION['registros'] as $key => $registro) {
        $nombreRegistroSinEspacios = str_replace(' ', '', $registro['nombre']);
        if ($nombreSinEspacios === $nombreRegistroSinEspacios) {
            // El nombre ya existe, editar el registro existente
            $_SESSION['registros'][$key] = [
                'nombre' => $nombre,
                'nota1' => $nota1,
                'nota2' => $nota2,
                'nota3' => $nota3,
                'nota4' => $nota4,
                'nota5' => $nota5,
                'prom' => $promedio_gpa,
                'simboloProm' => $simboloProm,
            ];

            $nombreExistente = true;
            break;
        }
    }

    // Si el nombre no existe, agregar un nuevo registro
    if (!$nombreExistente) {
        $_SESSION['registros'][] = [
            'nombre' => $nombre,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'nota3' => $nota3,
            'nota4' => $nota4,
            'nota5' => $nota5,
            'prom' => $promedio_gpa,
            'simboloProm' => $simboloProm,
        ];
    }
}

// Redireccionar al formulario principal
header("Location: index.php");
?>
