# Laravel Mirotik (Laramik) + SB Admin 2

Laravel Mirotik - Laravel 10.

| Laravel Version | Branch |
| --------------- | ------ |
| 10              | main   |

## Requirements

-   PHP >= 8.1.0
-   BCMath PHP Extension
-   Ctype PHP Extension
-   JSON PHP Extension
-   Mbstring PHP Extension
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension
-   EXT SOCKETS

## Installation

-   Clone the repo and `cd` into it
-   Run `composer install`
-   Rename or copy `.env.example` file to `.env`
-   Run `php artisan key:generate`
-   Set your database credentials in your `.env` file
-   Set your mikrotik connections in `.env` file
-   Run migration `php artisan migrate`
