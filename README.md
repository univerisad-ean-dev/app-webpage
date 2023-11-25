<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Pre-requisitos :pencil:

- PHP : ≥8.0
- [Composer](https://getcomposer.org/download/).
- [Git](https://git-scm.com/).

## Instalación :wrench:

1. Clonar el repositorio.
2. Ejecutar el comando `composer install`.

## Configuración :gear:

1. Crear un archivo `.env` en la raíz del proyecto.
2. Copiar el contenido del archivo `.env.example` en el archivo `.env`.
3. Ejecutar el comando `php artisan key:generate`.
4. Crear una base de datos en MySQL.
5. Configurar las variables de entorno en el archivo `.env`:
    - `DB_DATABASE`: Nombre de la base de datos.
    - `DB_USERNAME`: Nombre de usuario de la base de datos.
    - `DB_PASSWORD`: Contraseña de la base de datos.
6. Ejecutar el comando `php artisan migrate`.

## Ejecución :rocket:

1. Ejecutar el comando `php artisan serve`.
