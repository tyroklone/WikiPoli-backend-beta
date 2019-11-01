
## About WikiPoli

WikiPoli is a ...


## Installation step

- Clone the repo.
- composer install
- copy .env.example to .env .
- Add the database details to the .env.
- php artisan key:generate
- php artisan config:cache
- php artisan migrate
- php artisan serve

## For fresh migrations and update

<h6>Run the below commands</h6> <br>
- composer update <br>
- php artisan migrate:fresh --seed <br>
- php artisan passport:install <br>
- php artisan serve <br>
