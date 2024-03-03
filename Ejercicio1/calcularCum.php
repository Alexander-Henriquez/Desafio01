<?php
$resultado = "";

if ($_POST) {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];
    $nota5 = $_POST["nota5"];
    $nota6 = $_POST["nota6"];
    $nota7 = $_POST["nota7"];
    $nota8 = $_POST["nota8"];
    $nota9 = $_POST["nota9"];
    $nota10 = $_POST["nota10"];
    $nota11 = $_POST["nota11"];
    $nota12 = $_POST["nota12"];
    $nota13 = $_POST["nota13"];
    $nota14 = $_POST["nota14"];
    $nota15 = $_POST["nota15"];
    $nota16 = $_POST["nota16"];
    $nota17 = $_POST["nota17"];
    $nota18 = $_POST["nota18"];
    $nota19 = $_POST["nota19"];
    $nota20 = $_POST["nota20"];


        $cum = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8 + $nota9 + $nota10 +
                $nota11 + $nota12 + $nota13 + $nota14 + $nota15 + $nota16 + $nota17 + $nota18 + $nota19 + $nota20) / 20;
                
        if ($cum >= 9.5) {
            $categoria = "SUMMA CUM LAUDE";
        } elseif ($cum >= 8.5) {
            $categoria = "MAGNA CUM LAUDE";
        } elseif ($cum >= 8.0) {
            $categoria = "CUM LAUDE";
        } elseif ($cum >= 7.0) {
            $categoria = "GRADUADO";
        } else {
            $categoria = "No cumple con el CUM requerido para graduarse";
        }

        $resultado = "<div class='result-container'>
        <p>El CUM total del estudiante es: $cum</p>
        <p>El estudiante es de categoría: $categoria</p>
        </div>
        <br>
        <a href=index.html class='volver'>Volver</a>";
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Técnico en Ingeniería de Computación plan 2023</h1>
    <h2>Ingreso de Notas</h2>
        <?php echo $resultado; ?>
</body>
</html>
