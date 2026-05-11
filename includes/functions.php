<?php
/**
 * ARCHIVO: functions.php
 * FUNCIÓN: Utilidades globales, seguridad y consultas rápidas.
 */

/**
 * Obtiene la cantidad de usuarios conectados actualmente.
 * Basado en la tabla MEMB_STAT de MuOnline.
 */
function get_online_count($conn) {
    $sql = "SELECT COUNT(*) as Total FROM MEMB_STAT WHERE ConnectStat = 1";
    $query = sqlsrv_query($conn, $sql);
    
    if ($query) {
        $row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        return $row['Total'];
    }
    return 0;
}

/**
 * Limpia los datos de entrada para prevenir Inyección SQL.
 * Muy importante para el registro y login.
 */
function clean_input($data) {
    if (empty($data)) return "";
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // Elimina carácteres que suelen usarse en ataques SQL
    $data = str_replace(array("'", '"', ";", "--"), "", $data);
    return $data;
}

/**
 * Convierte el código de clase (Class) de la DB a un nombre legible.
 */
function get_class_name($class_id) {
    $classes = array(
        0  => 'Dark Wizard', 1  => 'Soul Master', 2  => 'Grand Master',
        16 => 'Dark Knight', 17 => 'Blade Knight', 18 => 'Blade Master',
        32 => 'Elf', 33 => 'Muse Elf', 34 => 'High Elf',
        48 => 'Magic Gladiator', 50 => 'Duel Master',
        64 => 'Dark Lord', 66 => 'Lord Emperor',
        80 => 'Summoner', 81 => 'Bloody Summoner', 82 => 'Dimension Master',
        96 => 'Rage Fighter', 98 => 'Fist Master'
    );
    
    return isset($classes[$class_id]) ? $classes[$class_id] : 'Desconocido';
}

/**
 * Verifica si un nombre de usuario ya existe (Útil para el Registro).
 */
function user_exists($conn, $username) {
    $username = clean_input($username);
    $sql = "SELECT memb___id FROM MEMB_INFO WHERE memb___id = ?";
    $params = array($username);
    $query = sqlsrv_query($conn, $sql, $params);
    
    return sqlsrv_has_rows($query);
}
?>