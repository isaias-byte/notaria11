<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Notaría 11 y 108

Notaria11 es una aplicación que permite administrar abogados y servicios que existen en dicha notaría, además, podemos ver información importante adicional acerca de la misma.

Esta es una aplicación completa, y fácil de manejar por parte de los usuarios

## Instalación

1. Clonar proyecto `git clone https://github.com/isaias-byte/notaria11.git`
2. Cambiarse a directorio `cd notaria11` 
3. Instalar dependiencias mediante composer: `composer install`
4. Crear archivo de variables de entorno: `cp .env.example .env`
5. Crear llave: `php artisan key:generate`
6. Configurar nombre de base de datos en .env (notaria11) y crear la base de datos con el comando `CREATE DATABASE notaria11`
7. Ejecutar las migraciones: `php artisan migrate --seed` genera los datos acerca de los servicios que existen, esto es fundamental para el funcionamiento correcto de la aplicación.
8. Linkear storage con el public para mostrar imágenes: `php artisan storage:link`  

## Instrucciones extra

- Debido a que utilizamos el framework de Laravel versión 8, se tiene que tener instalado mínimo la versión de PHP 7.3.0

Algunos comandos que pueden ser de utilidad en caso de que no carguen por completo las vistas:
- npm install.
- npm run dev.


---


## Desarrollo
- Implementado con Laravel (v8)

## Envío de Emails
- Tener una cuenta https://mailtrap.io/
- Configurar la sección de email en el .env con sus credenciales de mailtrap
- Host stmp.mailtrap.io
- Puerto 2525
- Encriptación tls

## Autores
- Isaías Juárez
- Alan Eduardo Gonzalez
- Mariam de Jesús Delgado
- Álvaro Alexis Muñoz

*Derechos reservados.*