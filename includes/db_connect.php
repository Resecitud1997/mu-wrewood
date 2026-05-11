<?php
/**
 * ARCHIVO: db_connect.php
 * FUNCIÓN: Establecer la conexión física con la base de datos MuOnline.
 */

// 1. Asegurarse de que config.php esté cargado para tener las constantes
if (!defined('DB_SERVER')) {
    require_once('config.php');
}

// 2. Configurar los parámetros de conexión
$connectionInfo = array(
    "Database" => DB_NAME,
    "UID" => DB_USER,
    "PWD" => DB_PASS,
    "CharacterSet" => "UTF-8", // Importante para tildes y nombres especiales
    "ReturnDatesAsStrings" => true // Facilita el manejo de fechas de logueo
);

// 3. Intentar realizar la conexión
$conn = sqlsrv_connect(DB_SERVER, $connectionInfo);

// 4. Verificación de errores profesional
if (!$conn) {
    // Si la conexión falla, mostramos un mensaje limpio (o error detallado en desarrollo)
    if (ini_get('display_errors')) {
        echo "Error de conexión con SQL Server:<br />";
        die(print_r(sqlsrv_errors(), true));
    } else {
        // Mensaje para el usuario final en producción
        die("<div style='text-align:center; padding:50px; font-family:sans-serif;'>
                <h2>Mantenimiento</h2>
                <p>El sitio web no puede conectar con la base de datos del juego en este momento.</p>
             </div>");
    }
}

/**
 * Nota: La variable $conn será utilizada por todos los módulos (ranking, registro, etc.)
 * para realizar las consultas (queries).
 */
?>