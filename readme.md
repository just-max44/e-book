# E-Book

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://laravel.com)

Welcome on my project "E-Book", it's a website for library, they can add products for their clients, and practice the click & collect

## Dev

Maxime Houdou

## Get project
```shell
git clone https://github.com/just-max44/e-book
```

### Requirements

* Latest Git stable version
* Latest Composer stable version
* Latest Docker Community Edition stable version: https://docs.docker.com/install
* Latest Node stable version
* Latest Yarn stable version

Configuration and install dependencies

`cp .env.example .env`. Then set the environment variables according to your project needs.
```shell
composer install --no-scripts --ignore-platform-reqs
sail up -d
sail artisan key:generate
sail artisan storage:link
yarn install
yarn upgrade
yarn dev
sail composer update
sail artisan migrate:refresh --seed
yarn dev
```
## Docker

This project uses a Docker local development environment provided by [Laravel Sail](https://laravel.com/docs/sail).

See how to use it on the [official documentation](https://laravel.com/docs/sail#executing-sail-commands).

## Database

Execute a database reset with the following command: `sail artisan migrate:refresh --seed`. This will execute all migrations and seeds.
