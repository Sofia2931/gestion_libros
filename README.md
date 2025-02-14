# Sistema de Gestión de Libros

## Descripción
Este sistema de gestión de libros permite a los usuarios realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una base de datos de libros. Está desarrollado en PHP y utiliza MySQL como base de datos.
El uso de sesiones se utiliza para poder obtener el id correspondiente y poder manejar la edicion del libro.

## Características
- **Crear**: Permite agregar nuevos libros a la base de datos.
- **Leer**: Permite visualizar la lista de libros disponibles.
- **Actualizar**: Permite modificar la información de los libros existentes.
- **Eliminar**: Permite eliminar libros de la base de datos.

## Requisitos
- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache recomendado)
- XAMPP (Contiene todos los requisitos)
- Visual Studio Code (Editor de codigo recomendado)

## Instalación
1. Dirigete al directorio /xammp/htdoc y abre una terminal.

2. Clona el repositorio:
    ```bash
    git clone https://github.com/Sofia2931/gestion_libros.git
    ```
2. Navega al directorio del proyecto:
    ```bash
    cd gestion_libros
    ```
3. Abre el editor de codigo para revisar los archivos de configuración:
    ```bash
    code .
    ```
4. Importa la base de datos del archivo `gestion_libros.sql` a la administracion de mysql.

5. Configura la base de datos en el archivo `conn/db.php` si es que necesitas realizar algun cambio.


## Uso
1. Inicia el servidor web XAMMP:

2. Abre tu navegador y navega a al `http://localhost/gestion_libros/` dependiendo del puerto que hayas abierto.

## Estructura del Proyecto
- `index.php`: Página principal del sistema.
- `functions/`: Contiene las funciones CRUD.
  - `create.php`: Función para crear un nuevo libro.
  - `read.php`: Función para leer los libros.
  - `update.php`: Función para actualizar un libro.
  - `delete.php`: Función para eliminar un libro.
- `pages/`: Contiene las páginas del sistema.
  - `register.php`: Página para registrar un nuevo libro.
  - `contact.php`: Página para ver el contacto.
  - `update.php`: Página para editar un libro.
