
## Badulla - ATI Main Web Site

### Foss LK Sri lanka (Laravel Version 5.4)
# Installation
type git clone respoURL projectname to clone the repository
type cd projectname
type composer install
type composer update
copy .env.example to .env
type php artisan key:generateto regenerate secure key
if you use MySQL in .env file :
set DB_CONNECTION
set DB_DATABASE
set DB_USERNAME
set DB_PASSWORD
type php artisan migrate --seed to create and populate tables
edit .env for emails configuration

Tests

## When you want to launch the tests first rollback the database :

php artisan migrate:rollback

## Then migrate and seed :

php artisan migrate --seed

## You can then use PHPUnit
