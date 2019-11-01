
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

<h6>Run the below commands</h6>
- composer update
- php artisan migrate:fresh --seed
- php artisan passport:install
- php artisan serve
