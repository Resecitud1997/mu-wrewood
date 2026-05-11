<?php
/**
 * ARCHIVO: index.php
 * FUNCIÓN: Puerta de enlace principal del sitio.
 */

// 1. Incluir la configuración y conexión a la DB
require_once('includes/config.php');
require_once('includes/db_connect.php');
require_once('includes/functions.php');

// 2. Cargar el encabezado (HTML, CSS, Menú)
include('templates/header.php');
?>

<!-- CONTENIDO PRINCIPAL -->
<main class="container my-5">
    <div class="row">
        
        <!-- COLUMNA IZQUIERDA: Noticias y Bienvenida -->
        <div class="col-lg-8">
            <section class="news-section">
                <h2 class="text-warning border-bottom pb-2 mb-4">Últimas Noticias</h2>
                
                <div class="card bg-dark text-white mb-4 shadow border-secondary">
                    <div class="card-body">
                        <h5 class="card-title text-info">¡Gran Apertura del Servidor!</h5>
                        <p class="card-text">Únete a la aventura en la Temporada 19. Comienza tu camino hacia el reset y domina el continente.</p>
                        <span class="badge bg-secondary">Publicado: <?php echo date('d/m/Y'); ?></span>
                    </div>
                </div>

                <div class="card bg-dark text-white mb-4 shadow border-secondary">
                    <div class="card-body">
                        <h5 class="card-title text-info">Evento de Bienvenida</h5>
                        <p class="card-text">Todos los personajes nuevos recibirán un kit de inicio básico durante las primeras 48 horas.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- COLUMNA DERECHA: Estado del Server y Mini Ranking -->
        <div class="col-lg-4">
            
            <!-- Widget de Estado -->
            <div class="card bg-dark text-white mb-4 border-warning shadow">
                <div class="card-header bg-warning text-dark fw-bold text-center">
                    ESTADO DEL SERVIDOR
                </div>
                <div class="card-body py-3">
                    <div class="d-flex justify-content-between">
                        <span>Usuarios Online:</span>
                        <span class="badge bg-success"><?php echo get_online_count($conn); ?></span>
                    </div>
                    <hr class="border-secondary">
                    <div class="d-flex justify-content-between small text-muted">
                        <span>Versión:</span>
                        <span>Season 19</span>
                    </div>
                    <div class="d-flex justify-content-between small text-muted">
                        <span>Experiencia:</span>
                        <span>9999x</span>
                    </div>
                </div>
            </div>

            <!-- Widget Mini Ranking (Muestra Top 5) -->
            <div class="card bg-dark text-white border-secondary shadow">
                <div class="card-header text-center fw-bold">TOP 5 GUERREROS</div>
                <div class="card-body p-0">
                    <table class="table table-dark table-striped table-hover mb-0 small">
                        <thead>
                            <tr class="text-muted">
                                <th>#</th>
                                <th>Nombre</th>
                                <th class="text-end">Resets</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // Incluimos el módulo de ranking para llenar la tabla
                            include('modules/ranking_mini.php'); 
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="ranking.php" class="btn btn-sm btn-outline-info">Ver Ranking Completo</a>
                </div>
            </div>

        </div>
    </div>
</main>

<?php
// 3. Cargar el pie de página (Scripts, Copyright, Cierre de HTML)
include('templates/footer.php');
?>