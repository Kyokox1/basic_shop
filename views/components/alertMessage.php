<?php if (isset($alert)): ?>
<div class="alert-overlay show"></div>
<div class="alert <?= $alert['type'] ?> show">
    <div class="alert-icon">
        <?= $alert['icon'] ?>
    </div>
    <div class="alert-message">
        <?= $alert['message'] ?>
    </div>
    <button class="alert-button" onclick="closeAlert()">Aceptar</button>
</div>

<script>
function closeAlert() {
    const alert = document.querySelector('.alert');
    const overlay = document.querySelector('.alert-overlay');
    
    if (alert && overlay) {
        alert.classList.remove('show');
        overlay.classList.remove('show');
        // Remover parámetros de la URL sin recargar
        history.replaceState(null, null, window.location.pathname);
        
        // Remover elementos del DOM después de la animación
        setTimeout(() => {
            alert.remove();
            overlay.remove();
        }, 300); // Coincide con la duración de la transición CSS
    }
}

// Ejecutar cuando el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.querySelector('.alert-overlay');
    if (overlay) {
        overlay.addEventListener('click', closeAlert);
    }

    // Cerrar automáticamente después de 5 segundos
    setTimeout(closeAlert, 5000);
});
</script>
<?php endif; ?>