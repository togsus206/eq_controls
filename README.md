# Equicontrol

Equicontrol es una aplicación web diseñada para mostrar controles remotos de televisores equivalentes entre sí. Es una solución simple y efectiva para identificar qué controles remotos pueden reemplazar a otros según su funcionalidad y compatibilidad.

## Tecnologías utilizadas

El proyecto ha sido desarrollado utilizando únicamente las siguientes tecnologías:
- **HTML**
- **CSS**
- **JavaScript**
- **PHP**

No se ha utilizado ningún framework adicional, lo que garantiza un enfoque ligero y sencillo.

## Instalación y uso local

Para ejecutar el proyecto en tu máquina local, sigue estos pasos:

1. **Clonar el repositorio**
   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd eq_controls
   ```

2. **Iniciar el servidor PHP integrado**
   Desde la terminal, ejecuta el siguiente comando:
   ```bash
   php -S 0.0.0.0:8000
   ```

3. **Abrir en el navegador**
   Ingresa a la URL [http://localhost:8000/index.php](http://localhost:8000/index.php) para ver la aplicación funcionando localmente.

## Despliegue en producción

El proyecto está desplegado en Azure y es accesible a través del dominio personalizado:
- [https://equicontrol.dev.ar](https://equicontrol.dev.ar)

Actualizacion 19/02/2025:

La aplicacion se ha movido al proveedor de servicios de hosting DonWeb. Si bien se sigue pudiendo acceder a traves de equicontrol.dev.ar, esta pagina se redirige a equicontrol.site(sin certificado SSL) 

### Proceso de despliegue
1. Los cambios se realizan en el entorno local.
2. Los archivos actualizados se suben al repositorio de GitHub.
3. DonWeb se utiliza para alojar y servir la aplicación web.

## Funcionalidades principales

- Mostrar una lista de controles remotos de televisores.
- Indicar las equivalencias entre diferentes modelos de controles remotos.
- Diseño simple y fácil de navegar, sin depender de frameworks.

## Contribuciones

Si deseas contribuir al desarrollo de Equicontrol:
1. Haz un fork del repositorio.
2. Crea una rama para tu funcionalidad o corrección de errores.
   ```bash
   git checkout -b nombre-de-tu-rama
   ```
3. Realiza tus cambios y súbelos.
   ```bash
   git add .
   git commit -m "Descripción de los cambios"
   git push origin nombre-de-tu-rama
   ```
4. Abre un Pull Request en el repositorio original.

## Contacto

Para cualquier duda, consulta o sugerencia, puedes ponerte en contacto a través del repositorio de GitHub o mediante el sitio web de la aplicación: [https://equicontrol.dev.ar](https://equicontrol.dev.ar).Donde se encuentra el mail a final de pagina para comunicarse

