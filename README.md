#### Install Packages

```
composer install
```

#### Copy .env file

```
cp .env.example .env
```

#### Set Database Detail

#### Install NPM Dependencies

```
npm install
```

or

```
yarn install || yarn
```

#### Start Laravel Project

```
php artisan serve
```

```
npm run watch

```

### Using docker
```
docker-compose up
```

```
export APP_SERVICE=${APP_SERVICE:-"laravel.test"}
export DB_PORT=${DB_PORT:-3306}
export WWWUSER=${WWWUSER:-$UID}
export WWWGROUP=${WWWGROUP:-$(id -g)}
```

### Web:

```
http://127.0.0.1:8000
```
