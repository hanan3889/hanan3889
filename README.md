## Task Manager

Application de gestion de tâches.

### Pré-requis

Ce qu'il est requis pour commencer :

-   PHP 8.2
-   Composer
-   Laravel 11
-   Serveur Web XAMPP, WAMPP ou Laragon
-   Mysql

### Clone du projet

Pour commmencer faire :

`git clone` + lien du projet

cd hanan3889

`composer install` pour installer les dépendances

`cp .env.example .env` 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bloccrud
DB_USERNAME=root
DB_PASSWORD=

Se rendre sur phpmyadmin et créer sa base de données avec le même nom enregistré en BDD.

`php artisan migrate --seed`

`php artisan key:generate`

`php artisan migrate`

`php artisan serve`


