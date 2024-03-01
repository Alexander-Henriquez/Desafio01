<!DOCTYPE html>
<html>
<head>
    <title>Fórmulas Científicas</title>
    <link rel="stylesheet" type="text/css" href="Ejercicio2.css">
</head>
<body>
    <h1>Fórmulas Científicas</h1>
    <form method="post">
        <label for="numero">Ingrese un número del 1 al 5:</label>
        <input type="number" name="numero" id="numero" min="1" max="5" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero >= 1 && $numero <= 5) {
            switch ($numero) {
                case 1:
                    echo "<h2>Matemáticas</h2>";
                    echo "<p>Teorema de Pitágoras: \( c^2 = a^2 + b^2 \)</p>";
                    echo "<p>Fórmula de Euler para poliedros: \( V - E + F = 2 \)</p>";
                    echo "<p>Identidad de Euler: \( e^{i\pi} + 1 = 0 \)</p>";
                    break;
                case 2:
                    echo "<h2>Física</h2>";
                    echo "<p>Ley de Coulomb: \( F = k \cdot \frac{{|q_1 \cdot q_2|}}{{r^2}} \)</p>";
                    echo "<p>Ley de Gravitación Universal de Newton: \( F = G \cdot \frac{{m_1 \cdot m_2}}{{r^2}} \)</p>";
                    echo "<p>Principio de Conservación de la Energía: \( E_{\text{inicial}} = E_{\text{final}} \)</p>";
                    break;
                case 3:
                    echo "<h2>Química</h2>";
                    echo "<p>Constante de Avogadro: \( N_A = 6.022 \times 10^{23} \, \text{mol}^{-1} \)</p>";
                    echo "<p>Ecuación de Nernst (para una célula electroquímica): \( E = E^{\circ} - \frac{{RT}}{{nF}} \ln Q \)</p>";
                    echo "<p>Ecuación de la Velocidad de Reacción (ley de velocidad de reacción): \( v = k[A]^m[B]^n \)</p>";
                    break;
                    case 4:
                        echo "<h2>Biología</h2>";
                        echo "<p>Ecuación de Monod (Crecimiento Microbiano): \( \mu = \frac{{\mu_{\text{max}} \cdot S}}{{K_s + S}} \)</p>";
                        echo "<p>Fórmula de Hardy-Weinberg (Equilibrio Genético): \( p^2 + 2pq + q^2 = 1 \)</p>";
                        echo "<p>Fórmula de Shannon (Diversidad de Especies): \( H = -\sum_{i=1}^{S} p_i \cdot \ln(p_i) \)</p>";
                        break;
                    
                    case 5:
                        echo "<h2>Geología</h2>";
                        echo "<p>Fórmula de Hjulström (Transporte de Sedimentos): \( v_t = k \cdot D^{1/2} \)</p>";
                        echo "<p>Ecuación de Darcy (Hidrogeología): \( Q = k \cdot A \cdot \frac{{\Delta h}}{{L}} \)</p>";
                        echo "<p>Fórmula de Bowen (Reacciones de Cristalización): \( \frac{{\text{SiO}_2}}{{\text{K}_2\text{O}+\text{Na}_2\text{O}}} = \frac{{\text{MgO}+\text{CaO}}}{{\text{Al}_2\text{O}_3+\text{Fe}_2\text{O}_3}} \)</p>";
                        break;
                                       
                default:
                    echo "Número fuera de rango.";
            }
        } else {
            echo "Ingrese un número válido del 1 al 5.";
        }
    }
    ?>
</body>
</html>
