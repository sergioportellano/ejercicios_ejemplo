// JavaScript personalizado para mejoras de UX
document.addEventListener('DOMContentLoaded', function() {
    console.log('Sistema web cargado correctamente');
    
    // Mejora para los enlaces activos
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    // Efectos hover para tarjetas
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.cursor = 'pointer';
        });
    });
    
    // Mostrar hora actual en consola (para desarrollo)
    const ahora = new Date();
    console.log(`Página cargada a las: ${ahora.toLocaleTimeString()}`);
    
    // Validación básica de formularios
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let valid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (!valid) {
                e.preventDefault();
                alert('Por favor, completa todos los campos requeridos.');
            }
        });
    });
});