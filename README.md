
Requirements
===================

* PHP >= 7.3
* mysql

Instructions
===================

Clone repo or download zip

cd into directory


Install dependencies

```
composer install
``` 

Copy .env file  for configurations

```
cp .env.example .env
```

Generate app key
```
php artisan key:generate
```

Database migration with seeders
```
php artisan migrate:fresh --seed
```

Run the local test server

```
php artisan serve
```

API access

* `localhost:8000/api/v1/runner/{runnerId}/form-data`

Run API test

```
php artisan test