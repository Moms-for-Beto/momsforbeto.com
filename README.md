# momsforbeto.com

## Stack

* **Backend:** Laravel 6
* **Frontend:** Tailwind CSS
* **Infrastructure:** Hosted on AWS Lambda via Laravel Vapor
* **Philosophy:** [KISS principle](https://en.wikipedia.org/wiki/KISS_principle)

## Development

### Install dependencies
```
composer install
yarn
```

### Development server
```
php artisan serve
yarn watch
```

## Deployment

```
vapor deploy # defaults to staging

vapor deploy production
```
