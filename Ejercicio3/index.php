<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Formulario PHP</title>
</head>
<body>
    <h2 class="title">Agregue notas de alumnos</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <div class="parent">
        <div>
            <label for="nota1">ASN:</label>
            <input type="number" name="nota1" min="0" max="10" required>
        </div>

        <div>
        <label for="nota2">DPS:</label>
        <input type="number" name="nota2" min="0" max="10" required>
        </div>

        <div>
        <label for="nota3">DSS:</label>
        <input type="number" name="nota3" min="0" max="10" required>
        </div>
        
        <div>
        <label for="nota4">DWF:</label>
        <input type="number" name="nota4" min="0" max="10" required>
        </div>

        <div>
        <label for="nota5">SPP:</label>
        <input type="number" name="nota5" min="0" max="10" required>
        </div>
        </div>
        
        <button type="submit">Agregar</button>
    </form>

    <h2>Notas de alumnos</h2>
    <?php include 'mostrar_registros.php'; ?>
</body>
</html>
