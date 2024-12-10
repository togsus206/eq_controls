let scrollInterval;

function startScroll(direction) {
    const navContainer = document.getElementById('nav-container');
    scrollInterval = setInterval(() => {
        navContainer.scrollBy({ left: direction * 5 });
    }, 20); // Ajusta la velocidad
}

function stopScroll() {
    clearInterval(scrollInterval);
}

// Guarda la posición del scroll antes de cambiar de página
const navContainer = document.getElementById('nav-container');
document.querySelectorAll('#nav-container a').forEach(link => {
    link.addEventListener('click', () => {
        localStorage.setItem('navScrollPosition', navContainer.scrollLeft);
    });
});

// Restaura la posición del scroll al cargar la página
window.addEventListener('DOMContentLoaded', () => {
    const savedPosition = localStorage.getItem('navScrollPosition');
    if (savedPosition) {
        navContainer.scrollTo({
            left: parseInt(savedPosition, 10),
            behavior: 'smooth' // Desplazamiento suave
        });
    }
});

// Limpia la posición del scroll si vuelves a la página principal
if (window.location.pathname.endsWith('/index.php')) {
    localStorage.removeItem('navScrollPosition');
}

// Detecta en qué página estás y aplica la clase "selected" al enlace correspondiente
window.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname;
    const navItems = document.querySelectorAll('.navbar-item');

    // Quitar la clase "selected" de todos los elementos al cargar
    navItems.forEach(item => item.classList.remove('selected'));

    // Si estás en el inicio, no colorea ningún enlace
    if (currentPath.endsWith('/index.php')) return;

    // Busca el enlace cuyo "data-page" coincide con la página actual
    navItems.forEach(item => {
        const page = item.getAttribute('data-page');
        if (currentPath.includes(page)) {
            item.classList.add('selected');
        }
    });
});
