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
    
});