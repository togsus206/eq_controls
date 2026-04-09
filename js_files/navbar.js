// Encapsular las funciones y lógica dentro de un objeto para mejor testabilidad
const NavBar = {
    scrollInterval: null,
    
    
    //Deslizar el navbar con la rueda del mouse
    setupMouseWheelHandler: function() {
      const navContainer = document.getElementById('nav-container');
      if (!navContainer) return;

      navContainer.addEventListener('wheel', (evt) => {
        // Evita que la página suba o baje mientras scrolleas sobre la barra
        evt.preventDefault();
        // Convierte el scroll vertical de la rueda en horizontal
        navContainer.scrollLeft += evt.deltaY;
      }, { passive: false }); // 'passive: false' es necesario para que preventDefault() funcione
    },
    
    // Funciones principales
    startScroll: function(direction) {
      const navContainer = document.getElementById('nav-container');
      this.scrollInterval = setInterval(() => {
        navContainer.scrollBy({ left: direction * 5 });
      }, 20); // Ajusta la velocidad
      return this.scrollInterval; // Devolvemos el ID del intervalo para testing
    },
    
    stopScroll: function() {
      if (this.scrollInterval) {
        clearInterval(this.scrollInterval);
        this.scrollInterval = null;
      }
    },
    
    // Guardar posición de scroll al hacer clic en enlaces
    setupLinkClickHandlers: function() {
      const navContainer = document.getElementById('nav-container');
      if (!navContainer) return; // Protección contra DOM no disponible
      
      document.querySelectorAll('#nav-container a').forEach(link => {
        link.addEventListener('click', () => {
          localStorage.setItem('navScrollPosition', navContainer.scrollLeft);
        });
      });
    },
    
    // Restaurar posición de scroll al cargar la página
    restoreScrollPosition: function() {
      const navContainer = document.getElementById('nav-container');
      if (!navContainer) return; // Protección contra DOM no disponible
      
      const savedPosition = localStorage.getItem('navScrollPosition');
      if (savedPosition) {
        navContainer.scrollTo({
          left: parseInt(savedPosition, 10),
          behavior: 'smooth'
        });
      }
    },
    
    // Limpiar posición de scroll en página principal
    checkForMainPage: function() {
      if (window.location.pathname.endsWith('/index.php')) {
        localStorage.removeItem('navScrollPosition');
      }
    },
    
    // Actualizar enlaces activos según la página actual
    updateActiveLinks: function() {
      const currentPath = window.location.pathname;
      const navItems = document.querySelectorAll('.navbar-item');
      
      // Quitar la clase "selected" de todos los elementos
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
    },
    
    // Función de inicialización para configurar todo
    init: function() {
      this.setupLinkClickHandlers();
      this.setupMouseWheelHandler();
      this.checkForMainPage();
      
      // Restaurar posición de scroll y actualizar enlaces activos inmediatamente
      // si el DOM ya está listo
      if (document.readyState === 'complete' || document.readyState === 'interactive') {
        this.restoreScrollPosition();
        this.updateActiveLinks();
      } else {
        // Agregar listeners para eventos DOM si todavía no está listo
        window.addEventListener('DOMContentLoaded', () => {
          this.restoreScrollPosition();
          this.updateActiveLinks();
        });
      }
    }
  };
  
  // Inicializar automáticamente siempre, pero evitar problemas en entorno de test
  if (typeof window !== 'undefined') {
    // Para ejecutarse tan pronto como se carga el script
    NavBar.init();
  }
  
  // Exportar para testing y reutilización
  module.exports = NavBar;
