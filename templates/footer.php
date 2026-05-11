<?php
/**
 * ARCHIVO: footer.php
 * FUNCIÓN: Cierre de etiquetas, scripts y sección de créditos.
 */
?>

<footer class="bg-black border-top border-warning border-opacity-25 pt-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Columna 1: Info -->
            <div class="col-md-4 mb-4">
                <h5 class="mu-title mb-3">SOBRE EL SERVIDOR</h5>
                <p class="small text-muted">
                    Bienvenido a <?php echo SERVER_NAME; ?>, una comunidad dedicada a brindar la mejor experiencia de Mu Online. 
                    Servidor alojado en Chile con baja latencia y seguridad garantizada.
                </p>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div class="col-md-4 mb-4 text-center">
                <h5 class="mu-title mb-3">ENLACES</h5>
                <ul class="list-unstyled">
                    <li><a href="register.php" class="text-decoration-none text-secondary hover-gold">Crear Cuenta</a></li>
                    <li><a href="downloads.php" class="text-decoration-none text-secondary hover-gold">Descargar Cliente</a></li>
                    <li><a href="ranking.php" class="text-decoration-none text-secondary hover-gold">Ranking Global</a></li>
                </ul>
            </div>

            <!-- Columna 3: Redes Sociales -->
            <div class="col-md-4 mb-4 text-end">
                <h5 class="mu-title mb-3">SÍGUENOS</h5>
                <div class="d-flex justify-content-end gap-3">
                    <a href="#" class="text-white fs-4"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-white fs-4"><i class="fa-brands fa-discord"></i></a>
                    <a href="#" class="text-white fs-4"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-secondary">

        <div class="row pb-4">
            <div class="col-md-12 text-center">
                <p class="small text-muted mb-0">
                    &copy; <?php echo date('Y'); ?> <strong><?php echo SERVER_NAME; ?></strong>. 
                    Mu Online es una marca registrada de Webzen Inc.
                </p>
                <p class="x-small text-uppercase mt-1" style="font-size: 0.7rem; color: #444;">
                    Desarrollado para la comunidad de Mu Online Chile.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts de Bootstrap (Necesarios para el menú móvil) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para efectos simples -->
<script>
    // Ejemplo: Alerta suave al copiar el IP (opcional)
    console.log("<?php echo SERVER_NAME; ?> Website Loaded.");
</script>

<style>
    .hover-gold:hover {
        color: var(--mu-gold) !important;
    }
    .x-small {
        letter-spacing: 1px;
    }
</style>

</body>
</html>