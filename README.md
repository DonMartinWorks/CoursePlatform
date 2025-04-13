# Proyecto Laravel 12 con Jetstream y Almacenamiento de Imágenes

Este proyecto es una aplicación Laravel 12 que utiliza Jetstream para la autenticación y gestión de usuarios. Además, implementa el almacenamiento de imágenes utilizando el sistema de discos de Laravel, configurado para usar el disco público.

## Requisitos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

* PHP 8.1 o superior
* Composer `(versión 2.5.5 o superior)`
* Node.js `(v18.17.1 o superior)` y npm
* Una base de datos (MySQL, PostgreSQL, SQLite, etc.)

## Instalación

1.  **Clonar el repositorio:**

    ```bash
    git clone <https://github.com/DonMartinWorks/CoursePlatform>
    cd <CoursePlatform>
    ```

2.  **Instalar dependencias de Composer:**

    ```bash
    composer install
    ```

3.  **Copiar el archivo `.env.example` a `.env` y configurar las variables de entorno:**

    ```bash
    cp .env.example .env
    ```

    Asegúrate de configurar correctamente las siguientes variables:

    -   `APP_NAME`: El nombre de tu aplicación.
    -   `APP_URL`: La URL base de tu aplicación (por ejemplo, `http://localhost:8000` o `http://127.0.0.1:8000`).
    -   `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`: Configuración de la base de datos.
    -   `FILESYSTEM_DISK`: Establecer a `public` para el almacenamiento de imágenes.

    Ejemplo de `.env`:

    ```
    APP_NAME=MiProyecto
    APP_URL=http://127.0.0.1:8000

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=mi_base_de_datos
    DB_USERNAME=mi_usuario
    DB_PASSWORD=mi_contraseña

    FILESYSTEM_DISK=public
    ```

4.  **Generar la clave de la aplicación:**

    ```bash
    php artisan key:generate
    ```

5.  **Ejecutar las migraciones:**

    ```bash
    php artisan migrate
    ```

6.  **Ejecutar los seeders:**

    ```bash
    php artisan db:seed
    ```

7.  **Instalar dependencias de Node.js:**

    ```bash
    npm install
    ```

8.  **Compilar los assets:**

    ```bash
    npm run build
    ```

9.  **Crear el enlace simbólico para el almacenamiento público:**

    ```bash
    php artisan storage:link
    ```

    Este comando crea un enlace simbólico desde `public/storage` a `storage/app/public`, permitiendo que las imágenes sean accesibles desde la web.

<br />

### Cuenta de prueba

_Después de ejecutar los seeders, va a crear un usuario de prueba, con los siguientes datos_

#### Usuarios por defecto

| Admin      | Datos                     |
| ---------- | ------------------------- |
| Nombre     | Administrador             |
| Email      | administrador@laravel.com |
| Contraseña | 123                       |

_El email (correo electrónico) corresponde a laravel por el NOMBRE DE LA APLICACIÓN `APP_NAME` del archivo `.env`_

<br />

## Ejecución

1.  **Levantar el servidor de Vite (para desarrollo frontend):**

    ```bash
    npm run dev
    ```

    Esto iniciará el servidor de desarrollo de Vite, que proporciona recarga en caliente y otras funcionalidades útiles durante el desarrollo frontend.

<br />

2.  **Ejecutar el servidor de desarrollo de Laravel (para backend):**

    ```bash
    php artisan serve
    ```

    Luego, puedes acceder a la aplicación en tu navegador en `http://localhost:8000` o la URL configurada en `APP_URL`.

## Configuración Adicional

-   Si necesitas configurar otros discos para el almacenamiento de archivos, puedes hacerlo en el archivo `config/filesystems.php`.
-   Para personalizar Jetstream, consulta la documentación oficial de Laravel Jetstream.

## Consideraciones sobre el disco público

-   El uso del disco público (`public/storage`) hace que los archivos sean accesibles directamente desde la web. Esto puede ser útil para imágenes y otros archivos públicos, pero asegúrate de no almacenar información sensible en este directorio.
-   En entornos de producción, se recomienda utilizar un servicio de almacenamiento en la nube (como Amazon S3, Google Cloud Storage, etc.) para almacenar archivos. Puedes configurar estos servicios en el archivo `config/filesystems.php`.

## Documentación adicional

-   [Laravel 12 Documentation](https://laravel.com/docs/12.x)
-   [Laravel Jetstream Documentation](https://jetstream.laravel.com/docs/installation)
-   [Laravel Filesystems Documentation](https://laravel.com/docs/12.x/filesystem)
-   [Vite Documentation](https://vitejs.dev/guide/)
