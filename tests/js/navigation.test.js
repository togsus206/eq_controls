// navigation.test.js

// Importar el módulo refactorizado
const NavBar = require('../../js_files/navbar.js');

// Mock del localStorage
const localStorageMock = (function() {
  let store = {};
  return {
    getItem: jest.fn(key => store[key] || null),
    setItem: jest.fn((key, value) => {
      store[key] = value.toString();
    }),
    removeItem: jest.fn(key => {
      delete store[key];
    }),
    clear: jest.fn(() => {
      store = {};
    })
  };
})();
Object.defineProperty(window, 'localStorage', { value: localStorageMock });

// Mocks para métodos de scroll
Element.prototype.scrollTo = jest.fn();
Element.prototype.scrollBy = jest.fn();

describe('Funciones de navegación', () => {
  // Setup común para todos los tests
  beforeEach(() => {
    // Limpia los mocks entre tests
    jest.clearAllMocks();
    
    // Restablecer el intervalo de scroll
    NavBar.stopScroll();
    
    // Crea el DOM básico para las pruebas
    document.body.innerHTML = `
      <div id="nav-container">
        <a href="index.php" class="navbar-item" data-page="index">Inicio</a>
        <a href="usuarios.php" class="navbar-item" data-page="usuarios">Usuarios</a>
        <a href="productos.php" class="navbar-item" data-page="productos">Productos</a>
      </div>
    `;
    
    // Resetea los valores almacenados
    localStorageMock.clear();
  });

  test('startScroll inicia el intervalo y ejecuta scrollBy en la dirección correcta', () => {
    // Preparar - usar mock para setInterval en vez de fake timers
    const originalSetInterval = global.setInterval;
    global.setInterval = jest.fn(() => 123); // Devuelve un ID de intervalo falso
    const scrollByMock = jest.fn();
    document.getElementById('nav-container').scrollBy = scrollByMock;
    
    // Ejecutar
    NavBar.startScroll(1); // Dirección positiva
    
    // Comprobar que setInterval ha sido llamado
    expect(global.setInterval).toHaveBeenCalled();
    expect(global.setInterval.mock.calls[0][1]).toBe(20); // Intervalo de 20ms
    
    // Ejecutar la función de callback del intervalo varias veces
    const intervalCallback = global.setInterval.mock.calls[0][0];
    intervalCallback(); // Primera llamada
    intervalCallback(); // Segunda llamada
    intervalCallback(); // Tercera llamada
    
    // Comprobar
    expect(scrollByMock).toHaveBeenCalledTimes(3);
    expect(scrollByMock).toHaveBeenCalledWith({ left: 5 });
    
    // Limpiar
    global.setInterval = originalSetInterval;
  });

  test('startScroll con dirección negativa desplaza correctamente', () => {
    // Preparar - usar mock para setInterval en vez de fake timers
    const originalSetInterval = global.setInterval;
    global.setInterval = jest.fn(() => 123); // Devuelve un ID de intervalo falso
    const scrollByMock = jest.fn();
    document.getElementById('nav-container').scrollBy = scrollByMock;
    
    // Ejecutar
    NavBar.startScroll(-1); // Dirección negativa
    
    // Ejecutar la función de callback del intervalo varias veces
    const intervalCallback = global.setInterval.mock.calls[0][0];
    intervalCallback(); // Primera llamada
    intervalCallback(); // Segunda llamada
    intervalCallback(); // Tercera llamada
    
    // Comprobar
    expect(scrollByMock).toHaveBeenCalledTimes(3);
    expect(scrollByMock).toHaveBeenCalledWith({ left: -5 });
    
    // Limpiar
    global.setInterval = originalSetInterval;
  });

  test('stopScroll detiene el intervalo correctamente', () => {
    // Preparar
    const originalClearInterval = global.clearInterval;
    global.clearInterval = jest.fn();
    NavBar.scrollInterval = 123; // Simular un intervalo activo
    
    // Ejecutar
    NavBar.stopScroll();
    
    // Comprobar
    expect(global.clearInterval).toHaveBeenCalledWith(123);
    
    // Limpiar
    global.clearInterval = originalClearInterval;
  });

  test('setupLinkClickHandlers guarda la posición de scroll al hacer clic', () => {
    // Preparar
    const navContainer = document.getElementById('nav-container');
    Object.defineProperty(navContainer, 'scrollLeft', { value: 150 });
    
    // Ejecutar
    NavBar.setupLinkClickHandlers();
    document.querySelectorAll('#nav-container a')[1].click();
    
    // Comprobar
    expect(localStorage.setItem).toHaveBeenCalledWith('navScrollPosition', 150);
  });

  test('restoreScrollPosition restaura correctamente la posición del scroll', () => {
    // Preparar
    localStorage.getItem.mockReturnValue('200');
    
    // Ejecutar
    NavBar.restoreScrollPosition();
    
    // Comprobar
    expect(localStorage.getItem).toHaveBeenCalledWith('navScrollPosition');
    expect(document.getElementById('nav-container').scrollTo).toHaveBeenCalledWith({
      left: 200,
      behavior: 'smooth'
    });
  });

  test('checkForMainPage elimina la posición del scroll en la página de inicio', () => {
    // Modificar la ruta actual para la prueba
    Object.defineProperty(window, 'location', {
      value: {
        pathname: '/index.php'
      },
      writable: true
    });
    
    // Ejecutar
    NavBar.checkForMainPage();
    
    // Comprobar
    expect(localStorage.removeItem).toHaveBeenCalledWith('navScrollPosition');
  });

  test('updateActiveLinks marca correctamente el enlace activo según la ruta', () => {
    // Modificar la ruta actual para la prueba
    Object.defineProperty(window, 'location', {
      value: {
        pathname: '/usuarios.php'
      },
      writable: true
    });
    
    // Ejecutar
    NavBar.updateActiveLinks();
    
    // Comprobar
    const usuariosLink = document.querySelectorAll('.navbar-item')[1];
    expect(usuariosLink.classList.contains('selected')).toBe(true);
    expect(document.querySelectorAll('.navbar-item')[0].classList.contains('selected')).toBe(false);
    expect(document.querySelectorAll('.navbar-item')[2].classList.contains('selected')).toBe(false);
  });

  test('updateActiveLinks no selecciona ningún enlace en la página de inicio', () => {
    // Modificar la ruta actual para la prueba
    Object.defineProperty(window, 'location', {
      value: {
        pathname: '/index.php'
      },
      writable: true
    });
    
    // Agregar la clase 'selected' a todos los enlaces para verificar que se elimine
    document.querySelectorAll('.navbar-item').forEach(item => {
      item.classList.add('selected');
    });
    
    // Ejecutar
    NavBar.updateActiveLinks();
    
    // Comprobar
    document.querySelectorAll('.navbar-item').forEach(item => {
      expect(item.classList.contains('selected')).toBe(false);
    });
  });

  test('init configura todos los handlers y comprobaciones necesarias', () => {
    // Espiar las funciones que deberían ser llamadas
    jest.spyOn(NavBar, 'setupLinkClickHandlers');
    jest.spyOn(NavBar, 'checkForMainPage');
    jest.spyOn(NavBar, 'restoreScrollPosition');
    jest.spyOn(NavBar, 'updateActiveLinks');
    
    // Mock del estado del documento para forzar el camino de ejecución inmediata
    Object.defineProperty(document, 'readyState', {
      value: 'complete',
      writable: true
    });
    
    // Ejecutar
    NavBar.init();
    
    // Comprobar que las funciones adecuadas fueron llamadas
    expect(NavBar.setupLinkClickHandlers).toHaveBeenCalled();
    expect(NavBar.checkForMainPage).toHaveBeenCalled();
    expect(NavBar.restoreScrollPosition).toHaveBeenCalled();
    expect(NavBar.updateActiveLinks).toHaveBeenCalled();
  });
});