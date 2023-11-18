# Sistema de Gestión de Cursos

## Características
- Crear nuevos registros de cursos.
- Visualizar la lista de cursos existentes.
- Actualizar la información de cursos existentes.
- Eliminar cursos del sistema.

## Tecnologías Utilizadas
- Front-end: HTML, CSS (no incluido en el código proporcionado)
- Back-end: PHP, MySQL
- Servidor web: XAMPP (Apache HTTP Server)

## Estructura del Proyecto
El proyecto sigue el patrón de diseño MVC (Modelo-Vista-Controlador), organizado de la siguiente manera:
- `models/`: Contiene los archivos PHP para la interacción con la base de datos (cursoDAO.php, conexion.php).
- `views/`: Contiene los formularios de usuario para interactuar con la aplicación (frmInsertar.php, frmModificar.php y frmConsultar.php).
- `controllers/`: Maneja la lógica de negocio y las peticiones del usuario (cursoController.php).

## Configuración y Despliegue
Para configurar y desplegar el Sistema de Gestión de Cursos, siga estos pasos:

### Requisitos Previos
- Instalar XAMPP o un entorno similar con soporte para PHP y MySQL.
- Crear la base de datos y la tabla `tcurso` en MySQL.

### Instalación
1. Clonar el repositorio o descargar el código fuente en la carpeta `htdocs` de XAMPP.
2. Iniciar los módulos Apache y MySQL en XAMPP.
3. Crear la base de datos y la tabla necesaria utilizando el script SQL proporcionado.
4. Configurar el archivo de conexión (`models/conexion.php`) con las credenciales de su base de datos.

### Uso
Acceda a la aplicación a través de su navegador en `localhost/Gestion_Curso`.