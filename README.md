# afmania
composer init

composer update

configurate .env file

  DB_CONNECTION=mysql
  
  DB_HOST=127.0.0.1
  
  DB_PORT=3306
  
  DB_DATABASE=test
  
  DB_USERNAME=root
  
  DB_PASSWORD=root
  
php artisan migrate:refresh --seed

php artisan serve
