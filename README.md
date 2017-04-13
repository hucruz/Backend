# Backend

## Instalación

1. `git clone git@github:hucruz/Backend.git`
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`

## Configuración de base de datos en .env 


`DB_CONNECTION=sqlite`  
`DB_FILE=database.sqlite`  

## Creación de tablas

`php artisan migrate`

## Correr servidor local

php artisan serve
