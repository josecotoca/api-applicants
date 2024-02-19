# _api-applicants_
Proyecto desarrollado en laravel 10

## _api for caniob

Los end points habilitados son los siguientes:

# _Auth_ #

|Ruta||Función|
|----------|----------|----------|
|/api/v1/login|POST| Authenticacion de usuario|

- Copiar .env.example y configurar su base de datos mysql.
- correr los siguientes comandos en consola
```sh
php artisan migrate
php artisan db:seed

php artisan l5-swagger:generate

php artisan serve
```

