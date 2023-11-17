# _api-applicants_

## _api for applicants of jobs_

El presente repositorio es un ejemplo práctico de una api aplicando el patron Repository en php Laravel 10.
Los end points habilitados son los siguientes:

# _Auth_ #

|Ruta||Función|
|----------|----------|----------|
|/api/v1/login|POST| Authenticacion de usuario|

# _Lead_ #

|Ruta||Función|
|----------|----------|----------|
|/api/v1/lead|POST| Registra una candidato|
|/api/v1/lead/{id}|GET|Realiza la recuperacion de un candidato desde un Id|
|/api/v1/leads|GET|Realiza la recuperacion de los candidatos. Si es usuario Manager recupera todos los candidatos, si es Agente recupera solo los marcados como owner|

- Copiar .env.example y configurar su base de datos mysql.
- correr los siguientes comandos en consola
```sh
php artisan migrate
php artisan db:seed
php artisan serve
```

Al realizar la migracion se crearan dos usuarios con las mismas contrasena:
user : agent , password: agent
user : manager , password: manager

- Podra realizar las pruebas con ambos usuarios desde postman por ejemplo importando desde el archivo Api.postman_collection.json

