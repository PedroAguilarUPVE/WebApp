document.querySelectorAll('.btn-descargar').forEach(function(btn) {
    btn.addEventListener('click', function(event) {
        // Prevenir la acción por defecto (no redirigir)
        event.preventDefault();

        // Obtener el enlace del archivo
        const fileUrl = btn.getAttribute('href');

        // Crear un enlace temporal para disparar la descarga
        const a = document.createElement('a');
        a.href = fileUrl;
        a.download = fileUrl.split('/').pop(); // Obtener el nombre del archivo automáticamente
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a); // Limpiar el enlace temporal
    });
});
