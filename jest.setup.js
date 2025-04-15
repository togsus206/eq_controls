// Simular funciones del navegador que podrían no estar disponibles en jsdom
window.scrollTo = jest.fn();
window.scrollBy = jest.fn();