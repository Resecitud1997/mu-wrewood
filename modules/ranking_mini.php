<?php
/**
 * ARCHIVO: modules/ranking_mini.php
 * FUNCIÓN: Extrae y muestra el Top 5 de personajes directamente de la DB.
 */

// 1. Definir la consulta SQL
// Nota: Ajusta los nombres de las columnas 'Resets', 'Name', 'cLevel' y 'Class' 
// según la versión de tu base de datos (Files Season 6, 15, 19, etc.)
$sqlRanking = "SELECT TOP 5 Name, cLevel, Resets, Class 
               FROM Character 
               ORDER BY Resets DESC, cLevel DESC";

$queryRanking = sqlsrv_query($conn, $sqlRanking);

// 2. Verificar si la consulta devolvió resultados
if ($queryRanking === false) {
    echo "<tr><td colspan='3' class='text-center text-danger'>Error al cargar ranking</td></tr>";
} else {
    $posicion = 1;
    
    // 3. Bucle para mostrar cada fila de la tabla
    while ($player = sqlsrv_fetch_array($queryRanking, SQLSRV_FETCH_ASSOC)) {
        
        // Usamos la función que creamos en functions.php para traducir el código de clase
        $className = get_class_name($player['Class']);
        
        echo "<tr>";
        echo "<td><span class='badge bg-dark border border-warning'>" . $posicion . "</span></td>";
        echo "<td>
                <div class='fw-bold text-info'>" . $player['Name'] . "</div>
                <small class='text-muted' style='font-size: 0.7rem;'>" . $className . "</small>
              </td>";
        echo "<td class='text-end text-warning fw-bold'>" . number_format($player['Resets']) . "</td>";
        echo "</tr>";
        
        $posicion++;
    }

    // Si no hay personajes creados aún
    if ($posicion == 1) {
        echo "<tr><td colspan='3' class='text-center'>No hay valientes registrados aún</td></tr>";
    }
}
?>